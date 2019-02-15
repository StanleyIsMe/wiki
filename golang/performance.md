## 性能優化

### 1.減少Defer使用
### 2.少用reflection 和 JSON

package encoding/json 當使用marshal或unmarshal也是依賴在reflection，假如要處理JSON的話，可以使用[ffjson](https://github.com/pquerna/ffjson)

### 3.記憶體管理
### 4.減少閉包(closure)使用
### 5.struct少用interface

當然必要的時候還是會用到，尤其要做unit test時需要mock掉一些method就必須使用interface

### 6.明確給值得類型
例如一個正整數不會超過uint32就不要使用int

### 7.減少function調用
### 8.盡量使用區域變數






## Ref

[So You Wanna Go Fast? Learn High Performance Go](https://dzone.com/articles/so-you-wanna-go-fast)
[雨痕學堂-Go性能優化](https://segmentfault.com/blog/qyuhen)
[5个GoLang 应用优化措施](https://www.golangnote.com/topic/83.html)
