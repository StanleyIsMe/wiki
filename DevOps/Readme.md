## What is DevOps

起因:DevOps試圖解決開發（Dev）團隊與維運（Ops）團隊之間存在已久的衝突及矛盾：開發團隊責難維運團隊的機器出了問題，維運團隊則把問題歸咎於開發團隊的程式碼上

目的:重視「軟體開發人員（Dev）」和「IT運維技術人員（Ops）」之間溝通合作的文化、運動或慣例。透過自動化「軟體交付」和「架構變更」的流程，來使得構建、測試、發布軟體能夠更加地快捷、頻繁和可靠。

## 持續整合 (continuous integration)

「 持續整合 」 目的在儘快讓新功能的程式碼整合到現存的基礎程式庫 (codebase) 中來進行測試 。
「 持續整合 」 通常會涵蓋單元測試 (unit tests) 與煙霧測試 (smoke tests)， 可以儘快找出回歸錯誤 (regression error) 的發生 。

## 持續部署 (continous deployment)

「 持續部署 」 的目的就是要讓軟體可以快速自動部署到不同的環境 。 常見的有 ：「 整合測試環境 (Integration Tests Environment)」、「 測試環境 (QA Environment)」、「 用戶驗收測試環境 (UAT Environment)」、「 上架環境 (Pre-production/Staging Environment)」、 以及 「 生產環境 (Production Environment)」。
為了確保部署軟體的功能一致 ，「 持續部署 」 必須採用同一個包裝好的套件 (package)， 不管是 Jar, DEB, RPM 或者其他形式 。

## 持續交付 (continous delivery)

「 持續交付 」 是將新的特性儘快交付到最終使用者 (end-user) 的手中 。


##Ref
1. [維基百科](https://zh.wikipedia.org/wiki/DevOps)
2. [ITHome](http://www.ithome.com.tw/news/96861)
3. [山姆鍋對持續整合、持續部署、持續交付的定義](https://samkuo.me/post/2013/10/continuous-integration-deployment-delivery/)
