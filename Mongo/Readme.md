## MongoDb

MongoDB是文件導向的資料庫，為目前NoSQL眾多選擇中，以文件儲存資料擅長。
Mongo的資料體結構是以 Key,Value組合的，儲存的方式與Json格式完全相同，另外多了很多的靈活性，也就每一筆文件的是欄位的型態是不一定的，欄位的存在性也是不一定的。

## Basic

RDBMS 與 MongoDB 的名詞對照表：

|  RDBMS  |  MongoDB  ||
|  -----  |  -------  |  -------  |
| Table   | Collection | 相當於一般資料庫開一個Table |
| Column  | key | 相當於資料表中的欄位 |
| Records / Rows | Document / Object | 相當於資料表中的一筆紀錄 |
| PK | _id| 相當於資料表中的主索引 |
| DB | db | 即相當於一個資料庫一個DB |

## How to install
env : ubuntu 14.04

`sudo apt-get update`

`sudo apt-get install -y mongodb`

`sudo service mongodb restart`

## basic mongo shell

啟動mongo shell
`mongo`

查看基本的操作說明
`> help`

查看有哪些db
`> show dbs`

選擇db
`> use test`

查看有哪些collections(table)
`> show collections`

某collections 建立一筆record
`> db.firstmongo.insert({"name:stanley","age":18})`

查詢某collections所有record
`> db.firstmongo.find()`

p.s :

1. 若collection不存在，會自動建立
2. 每建立一筆record，key會自動產生_id

##### p.s : '>' 代表進入mongo shell 模式，因此不必理會

## Ref

[官網](https://www.mongodb.com/)

[mongodb教程](http://www.runoob.com/mongodb/mongodb-tutorial.html)

http://mongodbcanred.blogspot.tw/2015/01/mongodb.html

https://dotblogs.com.tw/sungnoone/2012/01/11/65274

