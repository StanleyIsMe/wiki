## How to install php5.6

env:ubuntu14.04

```
apt-get update
apt-get install python-software-properties

# Add PHP 5.6 PPA
add-apt-repository -y ppa:ondrej/php
apt-get update

# install packages
apt-get install -y build-essential php-pear php-5.6 php5.6-cli php5.6-curl php5.6-dev php5.6-fpm php5.6-mcrypt 
apt-get install -y php-memcached php-mongo php5.6-mysql php-redis php5.6-gd php-xdebug

# enable PHP module
php5enmod mcrypt

service php5-fpm restart
```
## How to install php7.0

env:ubuntu14.04

```
# update server
apt-get update
apt-get install python-software-properties

# Add PHP 7.0 PPA
add-apt-repository ppa:ondrej/php
apt-get update

# install packages
apt-get install -y build-essential unzip php-pear php-dev libcurl4-openssl-dev php7.0 php7.0-mysql  php7.0-fpm php7.0-cli 
apt-get install -y php7.0-common php7.0-curl php7.0-gd php7.0-intl php7.0-json php7.0-mbstring php7.0-mcrypt php7.0-opcache
apt-get install -y php7.0-pgsql php7.0-soap php7.0-sqlite3 php7.0-xml php7.0-xmlrpc php7.0-xsl php7.0-zip

# enable PHP module
phpenmod mcrypt

service php7.0-fpm restart
```

