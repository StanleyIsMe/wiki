Given the root of a binary tree, return the inorder traversal of its nodes' values.

# Example 1:

![alt leetcode](https://assets.leetcode.com/uploads/2020/09/15/inorder_1.jpg)

```
Input: root = [1,null,2,3]
Output: [1,3,2]
```

# Example 4:

![alt leetcode](https://assets.leetcode.com/uploads/2020/09/15/inorder_5.jpg)

```
Input: root = [1,2]
Output: [2,1]
```


Constraints:
- The number of nodes in the tree is in the range [0, 100].
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
var all []int
func inorderTraversal(root *TreeNode) []int {
    if root == nil {
        return nil
    }
    all = nil
    path(root)
    return all
}

func path (currentNode *TreeNode) {
    if currentNode.Left != nil {
        path(currentNode.Left)
        
    }
    all = append(all, currentNode.Val)
    
    if currentNode.Right != nil {
        path(currentNode.Right)
    }
}
```

時間複雜:  O(n)

空間複雜:  O(logn) 

## Ref
[leetcode](https://leetcode.com/problems/binary-tree-inorder-traversal/)
