FROM debian:buster

RUN apt update
RUN apt upgrade -y
RUN apt install -y nginx

COPY ./conf/default ./nginx/conf

CMD ["nginx", "-g", "deamon off;"]