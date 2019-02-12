## 細節注意

## String

`string` 如需修改，需要將`string`對象轉化為`rune`類型（如果字符串含有非ASIC碼字符）或者`byte`類型（如果字符串由ASIC碼字符組成）的`slice`對象。

```go

package main

import "fmt"

func main() {
	var targetStr string
	
	targetStr = "謝"
	runeStr := []rune(targetStr)
	runeStr[0] = '安' //切記要使用單引號
	fmt.Println(string(runeStr))

}
```
