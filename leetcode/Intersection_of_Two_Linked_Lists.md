Given the heads of two singly linked-lists headA and headB, return the node at which the two lists intersect. 

If the two linked lists have no intersection at all, return null.

# Example 1:

![alt leetcode](https://assets.leetcode.com/uploads/2021/03/05/160_statement.png)

```
Input: intersectVal = 8, listA = [4,1,8,4,5], listB = [5,6,1,8,4,5], skipA = 2, skipB = 3
Output: Intersected at '8'
Explanation: The intersected node's value is 8 (note that this must not be 0 if the two lists intersect).
From the head of A, it reads as [4,1,8,4,5]. From the head of B, it reads as [5,6,1,8,4,5]. 
There are 2 nodes before the intersected node in A; 
There are 3 nodes before the intersected node in B.
```

Constraints:
- The number of nodes of listA is in the m.
- The number of nodes of listB is in the n.
- 0 <= m, n <= 3 * 104
- 1 <= Node.val <= 105
- 0 <= skipA <= m
- 0 <= skipB <= n
- intersectVal is 0 if listA and listB do not intersect.
- intersectVal == listA[skipA + 1] == listB[skipB + 1] if listA and listB intersect.


## solution 1

```golang

func getIntersectionNode(headA, headB *ListNode) *ListNode {
	if headA == nil || headB == nil {
		return nil
	}

	lenA, lenB := lengthOfList(headA), lengthOfList(headB)
	if lenA < lenB {
		headA, headB = headB, headA
		lenA, lenB = lenB, lenA
	}
	for i := 0; i < lenA-lenB; i++ {
		headA = headA.Next
	}

	for headA != nil && headB != nil && headA != headB {
		headA = headA.Next
		headB = headB.Next
	}

	return headA
}

func lengthOfList(l *ListNode) int {
	var length int
	for l != nil {
		l = l.Next
		length++
	}
	return length
}


```

時間複雜:  O(m+n)

空間複雜:  O(1)

## Ref
[leetcode](https://leetcode.com/problems/intersection-of-two-linked-lists/)
