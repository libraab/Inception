FROM debian:buster

RUN apt update
RUN apt upgrade -y
RUN apt install -y php php-fpm php-cli
RUN mkdir /run/php
RUN touch /run/php/php7.3-fpm.sock

CMD php-fpm7.3 -F
# docker build -t (image_name) . 
# docker run -d (image_name)