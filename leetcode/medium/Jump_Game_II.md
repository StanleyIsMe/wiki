Given an array of non-negative integers nums, you are initially positioned at the first index of the array.

Each element in the array represents your maximum jump length at that position.

Your goal is to reach the last index in the minimum number of jumps.

You can assume that you can always reach the last index.

# Example 1:

```
Input: nums = [2,3,1,1,4]
Output: 2
Explanation: The minimum number of jumps to reach the last index is 2. Jump 1 step from index 0 to 1, then 3 steps to the last index.
```

# Example 2:

```
Input: nums = [2,3,0,1,4]
Output: 2
```

# Example 3:


Constraints:
- 1 <= nums.length <= 104
- 0 <= nums[i] <= 1000



## solution 1

```golang

func max(a, b int) int {
  if a > b {
    return a
  }
  return b
}

func jump(nums []int) int {
  length := len(nums)
  if length <= 1 {
    return 0
  }
  
  step := 0
  lastMaxFarest := -1
  currentMaxFarest := 0
  
  for {
    step++
    nextFarest := 0
    for i := lastMaxFarest + 1; i <= currentMaxFarest && i < length; i++ {
      nextFarest = max(nextFarest, i + nums[i])
      if nextFarest >= length - 1 {
        return step
      }
    }
    lastMaxFarest, currentMaxFarest = currentMaxFarest, nextFarest
  }
}
}
```

時間複雜:  O(n)

空間複雜:  O(n)

## Ref
[leetcode](https://leetcode.com/problems/jump-game-ii/)
