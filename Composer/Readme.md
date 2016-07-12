## Composer

Composer 是一支取代 PEAR 的PHP套件/程式庫相依管理工具
PHP 的套件/程式庫相依管理工具

## Require Environment

1. php5.3
2. git
3. Linux/Window (Window就不多作介紹)

## How to Install

會產生 composer.phar
`curl -sS https://getcomposer.org/installer | php`

設成全域指令
`mv composer.phar  /usr/local/bin/composer`

## Command

查詢所以指令

`composer list`

--help可以查得該指令所有額外參數

`composer install --help`

執行套件更新，當編譯完composer.json 即可執行此 

`composer update`

替composer工具做更新

`composer self-update` 

編譯完composer.json後，建議檢核是否格式錯誤

`composer validate`

套件安裝，安裝至/vendor資料夾底下

`composer install`

列出目前專案裡安裝的套件資訊

`composer show -i`

只安裝某套件

`composer global require vendor/package:version`

移除某套件

`php composer.phar remove vendor/package vendor/package2`


## Ref
[官網](https://getcomposer.org/)

[Tsung's Blog](https://blog.longwin.com.tw/2013/05/php-composer-package-library-2013/)

[阿舍](http://www.arthurtoday.com/2013/01/ubuntu-install-php-composer.html)
