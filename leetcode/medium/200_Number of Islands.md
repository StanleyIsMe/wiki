Given an m x n 2D binary grid grid which represents a map of '1's (land) and '0's (water), return the number of islands.

An island is surrounded by water and is formed by connecting adjacent lands horizontally or vertically. You may assume all four edges of the grid are all surrounded by water.
# Example 1:

```
Input: grid = [
  ["1","1","1","1","0"],
  ["1","1","0","1","0"],
  ["1","1","0","0","0"],
  ["0","0","0","0","0"]
]
Output: 1
```

# Example 2:

```
Input: grid = [
  ["1","1","0","0","0"],
  ["1","1","0","0","0"],
  ["0","0","1","0","0"],
  ["0","0","0","1","1"]
]
Output: 3
```

Constraints:
- m == grid.length
- n == grid[i].length
- 1 <= m, n <= 300
- grid[i][j] is '0' or '1'.



## solution 1

```golang



var maxX,maxY int
var temp [][]tt
var a = tt{true}
func numIslands(grid [][]byte) int {

    maxX,maxY = len(grid[0]), len(grid)
    
    if maxX == 0 || maxY == 0 {
        return 0
    }
    
    count := 0
    temp = make([][]tt, maxY)
    for index, _ := range grid {
        temp[index] = make([]tt, maxX)
    }
    
    
    for y, val := range grid {
        for x:=0; x<len(val);x++ {
            
            if val[x] == '0' {
                continue
            }
 
            if (temp[y][x] == a) {
                continue
            }

            count++
            
            FindNext(grid, x,y)
        }
        
    }
    
    return count
}

func FindNext(grid [][]byte,x,y int) {
    if x<0 || x >= maxX || y < 0 || y>= maxY  || grid[y][x] == '0' {
        return
    }
    
    if (temp[y][x] == a) {
        return
    }
    
    
    temp[y][x] = a
    
    // 右
    FindNext(grid, x+1, y)
    // 下
    FindNext(grid, x, y+1)
    // 上
    FindNext(grid, x, y-1)
    // 左
    FindNext(grid, x-1, y)    
}

type tt struct {
    A bool
}

```

時間複雜:  O(m*n)

空間複雜:  O(m*n) 

## Ref
[leetcode](https://leetcode.com/problems/number-of-islands/)
