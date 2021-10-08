Given an integer array nums of unique elements, return all possible subsets (the power set).

The solution set must not contain duplicate subsets. Return the solution in any order.

# Example 1:

```
Input: nums = [1,2,3]
Output: [[],[1],[2],[1,2],[3],[1,3],[2,3],[1,2,3]]
```

# Example 2:

```
Input: nums = [0]
Output: [[],[0]]
```

Constraints:
- 1 <= nums.length <= 10
- -10 <= nums[i] <= 10
- All the numbers of nums are unique.



## solution 1

```golang


var result [][]int
func subsets(nums []int) [][]int {
    result = [][]int{}
    re([]int{}, nums)
    return result  
}
    

func re(sub []int, nums []int) {
    result = append(result, append([]int{}, sub...))
    
    for i:=0;i<len(nums);i++ {
        newSub := append(sub, nums[i])
        re(newSub, nums[i+1:])
    }
    
}

```

時間複雜:  O(n)

空間複雜:  O(n) 

## Ref
[leetcode](https://leetcode.com/problems/subsets/)
