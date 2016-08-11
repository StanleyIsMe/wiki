<?php
//申請的API金鑰
$API_KEY = "AIzaSyBZGsxFqbEgu0RMLj6amRz3cxeUX9HX9Ag";
//已知的APP推播識別ID
$RegId = "APA91bGoiB03-VR87wQeZbPlZktcG6R0Ti1y3Xy5P7ZEMZrB6mysEuBe4LzoKwcjgjtGanE_dOJQFuWEsrIE8UiaH_jSjnUh6PQUzGqYXuL86qLm7jdxp3ZKi4xwYxp8t8f-XOnhfVFuSOy-Idx4cH8EN2S68vxFcw";

//推播訊息
if (!empty($_POST['message'])) {
    //設定識別ID
    $registatoin_ids = [$RegId];
    //設定內容
    $message = ["message" => $_POST['message']];

    // GCM server 位置
    $url = 'https://android.googleapis.com/gcm/send';
    $json = [
        'registration_ids' => $registatoin_ids,
        'data'             => $message,
    ];

    $headers = [
        'Authorization: key=' . $API_KEY,
        'Content-Type: application/json'
    ];

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); //忽略SSL驗證
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($json));
    $result = curl_exec($curl);
    curl_close($curl);

    echo $result;

}
