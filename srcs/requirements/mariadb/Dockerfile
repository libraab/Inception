FROM debian:buster

RUN apt update
RUN apt upgrade -y
RUN apt install -y mariadb-server

CMD service mysql start && sleep infinity 
# TODO : previous line is shit, fix it later
#CMD ["mysqld"]