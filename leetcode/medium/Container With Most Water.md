Given n non-negative integers a1, a2, ..., an , where each represents a point at coordinate (i, ai). n vertical lines are 

drawn such that the two endpoints of the line i is at (i, ai) and (i, 0). 

Find two lines, which, together with the x-axis forms a container, such that the container contains the most water.

Notice that you may not slant the container.

# Example 1:

![alt leetcode](https://s3-lc-upload.s3.amazonaws.com/uploads/2018/07/17/question_11.jpg)

```
Input: height = [1,8,6,2,5,4,8,3,7]
Output: 49
Explanation: The above vertical lines are represented by array [1,8,6,2,5,4,8,3,7]. In this case, the max area of water (blue section) the container can contain is 49.
```

# Example 2:

```
Input: height = [1,1]
Output: 1
```

# Example 3:

```
Input: height = [4,3,2,1,4]
Output: 16
```

Constraints:
- n == height.length
- 2 <= n <= 105
- 0 <= height[i] <= 104



## solution 1

```golang

func maxArea(height []int) int {
    max := 0
    left, right := 0, len(height)-1
    for left < right {
        cal := 0
        if height[left] > height[right] {
            cal = (right-left) * height[right]
            right--
        } else {
            cal = (right-left) * height[left]
            left++
        }
        
        if cal > max {
            max = cal
        }
    }
    return max
}
```

時間複雜:  O(n)

空間複雜:  O(1) 

## Ref
[leetcode](https://leetcode.com/problems/container-with-most-water/)
