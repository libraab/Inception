# ██████╗     ██╗  ██╗    ██████╗
# ██╔══██╗    ██║  ██║    ██╔══██╗
# ██████╔╝    ███████║    ██████╔╝
# ██╔═══╝     ██╔══██║    ██╔═══╝
# ██║         ██║  ██║    ██║
# ╚═╝         ╚═╝  ╚═╝    ╚═╝

FROM debian:buster

RUN apt update
RUN apt upgrade -y
RUN apt install -y php php-fpm php-cli curl apt-utils php-mysql
RUN mkdir /run/php
RUN touch /run/php/php7.3-fpm.sock

COPY ./conf/www.conf ./etc/php/7.3/fpm/pool.d

RUN apt-get install -y wget
RUN wget -P /var/www/ https://fr.wordpress.org/latest-fr_FR.tar.gz
RUN tar -xf /var/www/latest-fr_FR.tar.gz -C /var/www/
RUN rm -rf /var/www/latest-fr_FR.tar.gz

COPY ./conf/wp-config.php /wp-config.php
COPY ./testos.sh /testos.sh

RUN chmod 777 /testos.sh

# RUN mv /var/www/html/wordpress/* /var/www/html/ && rm -rf /var/www/html/wordpress

# WORKDIR /var/www/wordpress/
# # for downloading something like a .zip thats used to install wordpress and config it, it's a WP-CLI
# RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
# RUN chmod +x wp-cli.phar
# RUN mv wp-cli.phar /usr/local/bin/wp
# # RUN chown -R www-data:www-data .
# # now we're inatalling wordpress with WP-cli
# RUN wp core download --allow-root
# COPY ./conf/wp-config.php ./var/www/html
# RUN wp core install --url=https://localhost  skip--title --admin_user='abouhlel' --admin_password='asma' --skip-email --allow-root
# RUN wp config create --dbname='wp_db' --dbuser='abouhlel' --dbpass='asma' --dbhost='mariadb'

EXPOSE 9000

CMD bash /testos.sh

# docker build -t php_img . 
# docker run -d php_img