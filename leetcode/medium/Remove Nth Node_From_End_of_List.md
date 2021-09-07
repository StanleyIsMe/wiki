Given the head of a linked list, remove the nth node from the end of the list and return its head.

# Example 1:

![alt leetcode](https://assets.leetcode.com/uploads/2020/10/03/remove_ex1.jpg)

```
Input: head = [1,2,3,4,5], n = 2
Output: [1,2,3,5]
```

# Example 2:

```
Input: head = [1], n = 1
Output: []
```

# Example 3:

```
Input: head = [1,2], n = 1
Output: [1]
```

Constraints:
- The number of nodes in the list is sz.
- 1 <= sz <= 30
- 0 <= Node.val <= 100
- 1 <= n <= sz



## solution 1

```golang
/**
 * Definition for singly-linked list.
 * type ListNode struct {
 *     Val int
 *     Next *ListNode
 * }
 */
func removeNthFromEnd(head *ListNode, n int) *ListNode {
    
    return cal(head, &n, nil)
}

func cal(current *ListNode, n *int, preNode *ListNode) *ListNode {
    if current == nil {
        return nil
    }
    
    cal(current.Next, n, current)
    *n--
    
    if *n == 0 {
        if preNode == nil {
            current = current.Next
        } else {
            preNode.Next = current.Next
        }
    }
    return current
}
}
```

時間複雜:  O(n)

空間複雜:  O(1) 

## Ref
[leetcode](https://leetcode.com/problems/remove-nth-node-from-end-of-list/)
