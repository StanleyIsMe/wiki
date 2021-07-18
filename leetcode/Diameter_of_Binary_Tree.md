Given the root of a binary tree, return the length of the diameter of the tree.

The diameter of a binary tree is the length of the longest path between any two nodes in a tree. This path may or may not pass through the root.

The length of a path between two nodes is represented by the number of edges between them.

# Example 1:

![alt leetcode](https://assets.leetcode.com/uploads/2021/03/06/diamtree.jpg)

```
Input: root = [1,2,3,4,5]
Output: 3
Explanation: 3is the length of the path [4,2,1,3] or [5,2,1,3].
```



Constraints:
- The number of nodes in the tree is in the range [1, 104].
- -100 <= Node.val <= 100



## solution 1

```golang

var maxDef = 0
func diameterOfBinaryTree(root *TreeNode) int {
    maxDef = 0
    visit(root)
    return maxDef
}

func visit (root *TreeNode) int{
    if root == nil {
        return 0
    }
    l := visit(root.Left)
    r := visit(root.Right)
    
    maxDef = max(maxDef, l+r)
    return 1 + max(l,r)
    
}


func max(l,r int) int {
    if l>r {
        return l
    } 
        return r
}
```

時間複雜:  O(n)

空間複雜:  O(n)

## Ref
[leetcode](https://leetcode.com/problems/diameter-of-binary-tree/)
