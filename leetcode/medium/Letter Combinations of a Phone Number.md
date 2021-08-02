Given a string containing digits from 2-9 inclusive, return all possible letter combinations that the number could represent. Return the answer in any order.

A mapping of digit to letters (just like on the telephone buttons) is given below. Note that 1 does not map to any letters.

![alt leetcode](https://upload.wikimedia.org/wikipedia/commons/thumb/7/73/Telephone-keypad2.svg/200px-Telephone-keypad2.svg.png)

# Example 1:

```
Input: digits = "23"
Output: ["ad","ae","af","bd","be","bf","cd","ce","cf"]
```

# Example 2:

```
Input: digits = ""
Output: []
```


Constraints:
- 0 <= digits.length <= 4
- digits[i] is a digit in the range ['2', '9'].



## solution 1

```golang

var NumberMap = map[byte][]string {
    '2' : {"a", "b", "c"},
    '3' : {"d", "e", "f"},
    '4' : {"g", "h", "i"},
    '5' : {"j", "k", "l"},
    '6' : {"m", "n", "o"},
    '7' : {"p", "q", "r", "s"},
    '8' : {"t", "u", "v"},
    '9' : {"w", "x", "y", "z"},
}

func letterCombinations(digits string) []string {
    if digits == "" {
        return nil
    }
    
    combin := NumberMap[digits[0]]
    for i:=1;i<=len(digits)-1;i++ {
        var temp []string
        for _, letter := range combin {
            for _, subLetter := range NumberMap[digits[i]] {
                temp = append(temp, letter+subLetter)
            }
             
        }
        combin = temp
    }

    return combin
}
```

時間複雜:  O(n^2)

空間複雜:  O(n) 

## Ref
[leetcode](https://leetcode.com/problems/letter-combinations-of-a-phone-number/)
