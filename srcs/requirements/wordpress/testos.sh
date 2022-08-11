#!/bin/bash

# si /var/www/html/ vide faire
DIR="/var/www/html"
if ["$(ls -A $DIR)"];then
    echo "NOT EMPTY."
else
    cp -rv /var/www/wordpress/* /var/www/html/
    cp -v /wp-config.php /var/www/html
    chown -Rv www-data:www-data /var/www/wordpress
    echo "Done."
    php-fpm7.3 -F
fi