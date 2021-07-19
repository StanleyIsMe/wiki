Given the root of a binary tree, check whether it is a mirror of itself (i.e., symmetric around its center).

# Example 1:

![alt leetcode](https://assets.leetcode.com/uploads/2021/02/19/symtree1.jpg)

```
Input: root = [1,2,2,3,4,4,3]
Output: true
```



Constraints:
- The number of nodes in the tree is in the range [1, 1000].
- -100 <= Node.val <= 100



## solution 1

```golang

/**
 * Definition for a binary tree node.
 * type TreeNode struct {
 *     Val int
 *     Left *TreeNode
 *     Right *TreeNode
 * }
 */
func isSymmetric(root *TreeNode) bool {
    if root == nil {
        return true
    }
    
    return path(root.Left, root.Right)
}

func path(root1 *TreeNode, root2 *TreeNode) bool {
    if root1 == nil && root2 == nil {
        return true
    }
    
    if root1 == nil || root2 == nil {
        return false
    }
    
    if root1.Val != root2.Val {
        return false
    }
    
    return path(root1.Right, root2.Left) && path(root1.Left, root2.Right)
}
```

時間複雜:  O(n)

空間複雜:  O(n)

## Ref
[leetcode](https://leetcode.com/problems/symmetric-tree/)
