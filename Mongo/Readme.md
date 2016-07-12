## MongoDb

## What is Mongo
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
`sudo apt-get update
 sudo apt-get install -y mongodb
 sudo service mongodb restart
`

## Ref

[官網](https://www.mongodb.com/)
http://mongodbcanred.blogspot.tw/2015/01/mongodb.html
https://dotblogs.com.tw/sungnoone/2012/01/11/65274
