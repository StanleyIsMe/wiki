<?php
 
// Production mode
$certificateFile = 'apns-dis.pem';
$pushServer = 'ssl://gateway.push.apple.com:2195';
$feedbackServer = 'ssl://feedback.push.apple.com:2196';
 
// Sandbox mode
$certificateFile = 'apns-dev.pem';
$pushServer = 'ssl://gateway.sandbox.push.apple.com:2195';
$feedbackServer = 'ssl://feedback.sandbox.push.apple.com:2196';
 
// socket建立連線
$ctx = stream_context_create();
// $ctx這個socket連接，使用ssl協議，本地授權證書，ck.pem作為授權證書
stream_context_set_option($ctx, 'ssl', 'local_cert', $certificateFile);
stream_context_set_option($ctx, 'ssl', 'passphrase', '1234567');

$fp = stream_socket_client(
    $pushServer, 
    $error, 
    $errorStr, 
    100, 
    STREAM_CLIENT_CONNECT|STREAM_CLIENT_PERSISTENT, 
    $ctx
);
 
// make payload
$payloadObject = [
    'aps' => [
        'alert' => 'Server Time:'.date('Y-m-d H:i:s'),
        'sound' => 'default',
        'badge' => 3
    ],
    'custom_key' => 'custom_value'
];
$payload = json_encode($payloadObject);
 
$deviceToken = 'aa3b045415034b96da5e98f57e35735a8ed8b842506f770ee769de32c6305ed7';
$expire = time() + 3600;
$id = time();
 
if ($expire) {
    // Enhanced mode
    $binary  = pack('CNNnH*n', 1, $id, $expire, 32, $deviceToken, strlen($payload)).$payload;
} else {
    // Simple mode
    $binary  = pack('CnH*n', 0, 32, $deviceToken, strlen($payload)).$payload;
}
$result = fwrite($fp, $binary);
fclose($fp);
 
