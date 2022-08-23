#!/bin/bash

service mysql start
echo "CREATE DATABASE wp_db;" | mysql
echo "CREATE USER 'abouhlel'@'%' IDENTIFIED BY 'asma';" | mysql
echo "GRANT ALL PRIVILEGES ON wp_db . * TO 'abouhlel'@'%';" | mysql
echo "FLUSH PRIVILEGES;" | mysql
mysql -u root wp_db --force < /bdd.sql
