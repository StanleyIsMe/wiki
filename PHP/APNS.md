## APNS(Apple Push Notification Service)

一種Server Push 技術，簡單說就是主動由 Server 發送訊息到 ios-Client 的方法

## Flow

![Imgur](http://i.imgur.com/5mizRy0.png)

Role :

- Device - 就是你的行動上網裝置 (MID)
- APNS - Apple 提供連線服務的伺服器 (Gateway)
- Provider - 需要自行實作的訊息發送者

![Imgur](http://i.imgur.com/fFNGhW5.png)


Provider 在發送訊息時需要對 APNS 進行連線憑證 SSL Push Certificate

憑證形式 :

1. Sandbox => Development Ceritificate 使用的時機我們稱為 Sandbox，主要用在 App 未上架前的開發測試週期中
2. Production => App 上架之後 Provider 就要改用 Production Ceritificate 來發送訊息


![Imgur](http://i.imgur.com/CBUbTE7.png)


## Ref
[iOS APNS 訊息推播 - Apple Push Notification ](https://blog.toright.com/posts/2806/ios-apns-%E8%A8%8A%E6%81%AF%E6%8E%A8%E6%92%A5-apple-push-notification-service-%E4%BB%8B%E7%B4%B9.html)

[如何透過 PHP 發送 APNS](https://blog.toright.com/posts/2846/%E5%A6%82%E4%BD%95%E9%80%8F%E9%81%8E-php-%E7%99%BC%E9%80%81-apple-notification-push.html)

[ios developer library](https://developer.apple.com/library/ios/documentation/NetworkingInternet/Conceptual/RemoteNotificationsPG/Chapters/ApplePushService.html)
