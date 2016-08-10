## APNS(Apple Push Notification Service)

一種Server Push 技術，簡單說就是主動由 Server 發送訊息到 ios-Client 的方法

Role :

- Device - 就是你的行動上網裝置 (MID)
- APNS - Apple 提供連線服務的伺服器 (Gateway)
- Provider - 需要自行實作的訊息發送者

## Flow

### 1.Device －－> 連接－－> APNS 獲取 Device-id 轉成 DeviceToken

### 2.Device－－>連接－－>Client App－－> 提供DeviceToken to Provider
 
![Imgur](http://i.imgur.com/5mizRy0.png)

### 3.Provider偵測需要push的消息生成Notification資訊

Provider 在發送訊息時需要對 APNS 進行連線憑證 SSL Push Certificate

- Sandbox => Development Ceritificate 使用的時機我們稱為 Sandbox，主要用在 App 未上架前的開發測試週期中
- Production => App 上架之後 Provider 就要改用 Production Ceritificate 來發送訊息
 
當 Provider 透過憑證連上 APNS Gateway 之後，只要照著以下的格式傳送資料到 Gateway，APNS 就會幫你發送訊息了，兩種訊息格式定義如下：

- Simple Notification => 非常沒有保障的，當 Provider 發送 Notification 的時候，假如 Device 這時並沒有正在跟 APNS 連線，那麼這一封信息就不會被傳送到使用者的裝置上。
- Enhanced Notification => 發送時可以定義「存活時間」，如果在有效時間內只要 Device 有連上 APNS，那麼這一封訊息 (Payload) 就會被送出

![Imgur](http://i.imgur.com/CBUbTE7.png)

### 4.Provider把要push的消息推送到APNS

當 Provider 要發送訊息時，必須傳送一個特別格式的資料到 APNS，這個資料我們稱為 Payload。

```Json
{
    "aps": {
        "alert": "Hello World.",  //提供文字訊息顯示
        "badge": 9,               //提供 App 圖示右上角的顯示數字
        "sound": "default"        //提供收到訊息要播放的聲音
    },
    "custom_key": "custom_value"
}
```

### 5.APNS把該消息推送到手機

![Imgur](http://i.imgur.com/fFNGhW5.png)


## Ref
[iOS APNS 訊息推播 - Apple Push Notification ](https://blog.toright.com/posts/2806/ios-apns-%E8%A8%8A%E6%81%AF%E6%8E%A8%E6%92%A5-apple-push-notification-service-%E4%BB%8B%E7%B4%B9.html)

[如何透過 PHP 發送 APNS](https://blog.toright.com/posts/2846/%E5%A6%82%E4%BD%95%E9%80%8F%E9%81%8E-php-%E7%99%BC%E9%80%81-apple-notification-push.html)

[ios developer library](https://developer.apple.com/library/ios/documentation/NetworkingInternet/Conceptual/RemoteNotificationsPG/Chapters/ApplePushService.html)

[iOS用戶端的APNS服務簡介與實現](http://fecbob.pixnet.net/blog/post/38698563-ios%E7%94%A8%E6%88%B6%E7%AB%AF%E7%9A%84apns%E6%9C%8D%E5%8B%99%E7%B0%A1%E4%BB%8B%E8%88%87%E5%AF%A6%E7%8F%BE)
