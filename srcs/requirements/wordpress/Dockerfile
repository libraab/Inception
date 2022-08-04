# ██████╗     ██╗  ██╗    ██████╗
# ██╔══██╗    ██║  ██║    ██╔══██╗
# ██████╔╝    ███████║    ██████╔╝
# ██╔═══╝     ██╔══██║    ██╔═══╝
# ██║         ██║  ██║    ██║
# ╚═╝         ╚═╝  ╚═╝    ╚═╝

FROM debian:buster

RUN apt update
RUN apt upgrade -y
RUN apt install -y php php-fpm php-cli
RUN mkdir /run/php
RUN touch /run/php/php7.3-fpm.sock

COPY ./conf/php.ini ./etc/php/7.3/fpm
COPY ./conf/www.conf ./etc/php/7.3/fpm/pool.d
CMD ["php-fpm7.3",  "-F"]

# docker build -t php_img . 
# docker run -d php_img