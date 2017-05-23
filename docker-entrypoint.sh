#!/bin/bash
sleep 15s
echo "create database xss" | mysql --host mysql --user root -p$MYSQL_PASSWORD
mysql --host mysql --user root -p$MYSQL_PASSWORD xss < /var/xss.sql
ip=$(awk 'END{print $1}' /etc/hosts)
echo "delete from mysql.user where user='root' and host='%';GRANT ALL PRIVILEGES ON *.* TO 'root'@'$ip' IDENTIFIED BY '$MYSQL_PASSWORD' WITH GRANT OPTION;flush privileges;" | mysql --host mysql --user root -p$MYSQL_PASSWORD
apache2-foreground