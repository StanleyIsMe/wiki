## GCM

在推播技術上，Android平台的叫GCM(Google Cloud Messaging)，ios平台叫APNS(Apple Push Notification Service)

## Flow

![Imgur](http://i.imgur.com/8BXYjhQ.png)


1. Device.App跟GCM註冊  
首先我們開發的Device.App必須先跟GCM註冊，並傳送Sender ID，告訴GCM現在是哪個人要來使用這GCM服務。 

2. GCM Server回傳Reg ID  
Device.App註冊成功後GCM Server回丟一個Reg ID給App，這個Reg ID就是要給我們架設的第三方Server識別所用，才能知道訊息要發送給哪些Device。

3. Device.App回傳Reg ID給第三方server  
Device.App拿到Reg ID後，必須傳送到我們架設發送訊息的Server，並且把它存起來。

4. 第三方Server 傳送[RegId、API key、Message]至GCM  
第三方Server發送訊息，必須透過GCM，所以要跟它說你要丟給誰，也就是API Key、Reg ID以及Message。

5. GCM發送訊息至Device  
GCM傳送訊息到該Reg ID的Device上。

ps :  
- 發送訊息前，記得與 [Google Api Project](https://console.developers.google.com/apis/library) 進行申請
- 傳遞的訊息內容僅限JSON格式且不能超過4kb

## Ref

[Jeremy Huang.ANDROID 的推播功能實作](http://blog.jeremyhuang.com/2014/03/android_29.html)

[PHP發送Android推播訊息(使用GCM)](http://gnehcic.azurewebsites.net/php%E6%8E%A8%E9%80%81%E6%8E%A8%E6%92%AD%E8%A8%8A%E6%81%AF/)


