FROM debian:buster

RUN apt update
RUN apt upgrade -y
RUN apt install -y nginx

CMD ["nginx", "-g", "daemon off;"]