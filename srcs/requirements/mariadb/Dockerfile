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
COPY ./conf/50-server.cnf ./etc/mysql/mariadb.conf.d/

RUN service mysql start \
    && mysql -e "GRANT ALL PRIVILEGES ON *.* TO 'abouhlel'@'%' IDENTIFIED BY 'asma' WITH GRANT OPTION; CREATE DATABASE wp_db ; FLUSH PRIVILEGES ; " \
    && printf "\n y\n 'asma' \n 'asma' \n y\n y\n y\n y\n y\n " | mysql_secure_installation


EXPOSE 3306

CMD ["mysqld"]
# CMD sleep infinity


# COPY ./conf/script.sh /script.sh
# RUN chmod 777 /script.sh

# RUN ./script.sh

# CMD ["mysqld"]

# docker build -t db_img . 
# docker run -d db_img