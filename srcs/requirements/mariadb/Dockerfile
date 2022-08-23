# ███╗   ███╗     █████╗     ██████╗     ██╗     █████╗
# ████╗ ████║    ██╔══██╗    ██╔══██╗    ██║    ██╔══██╗
# ██╔████╔██║    ███████║    ██████╔╝    ██║    ███████║
# ██║╚██╔╝██║    ██╔══██║    ██╔══██╗    ██║    ██╔══██║
# ██║ ╚═╝ ██║    ██║  ██║    ██║  ██║    ██║    ██║  ██║
# ╚═╝     ╚═╝    ╚═╝  ╚═╝    ╚═╝  ╚═╝    ╚═╝    ╚═╝  ╚═╝

FROM debian:buster

RUN apt update
RUN apt upgrade -y
RUN apt install -y mariadb-server
COPY ./conf/50-server.cnf ./etc/mysql/mariadb.conf.d
COPY ./conf/bdd.sql /bdd.sql
COPY ./conf/script.sh /script.sh
RUN chmod 777 /script.sh

RUN ./script.sh

CMD ["mysqld"]

# docker build -t db_img . 
# docker run -d db_img