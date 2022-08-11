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

WORKDIR /var/www/

# RUN apt-get install -y wget

# RUN apt-get install -y wget && wget https://fr.wordpress.org/latest-fr_FR.tar.gz ./ && tar -xf latest-fr_FR.tar.gz -C ./html

# RUN tar -xf latest-fr_FR.tar.gz -C ./html

# WORKDIR /var/www/wordpress/
# # for downloading something like a .zip thats used to install wordpress and config it, it's a WP-CLI
# RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
# RUN chmod +x wp-cli.phar
# RUN mv wp-cli.phar /usr/local/bin/wp
# # RUN chown -R www-data:www-data .
# # now we're inatalling wordpress with WP-cli
# RUN wp core download --allow-root
# # COPY ./conf/wp-config.php ./var/www/html
# RUN wp core install --url=https://localhost  skip--title --admin_user='abouhlel' --admin_password='asma' --skip-email --allow-root
# RUN wp config create --dbname='wp_db' --dbuser='abouhlel' --dbpass='asma' --dbhost='mariadb'

EXPOSE 9000

CMD ["php-fpm7.3",  "-F"]

# docker build -t php_img . 
# docker run -d php_img