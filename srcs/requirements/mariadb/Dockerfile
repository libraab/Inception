# ███╗   ███╗     █████╗     ██████╗     ██╗     █████╗
# ████╗ ████║    ██╔══██╗    ██╔══██╗    ██║    ██╔══██╗
# ██╔████╔██║    ███████║    ██████╔╝    ██║    ███████║
# ██║╚██╔╝██║    ██╔══██║    ██╔══██╗    ██║    ██╔══██║
# ██║ ╚═╝ ██║    ██║  ██║    ██║  ██║    ██║    ██║  ██║
# ╚═╝     ╚═╝    ╚═╝  ╚═╝    ╚═╝  ╚═╝    ╚═╝    ╚═╝  ╚═╝

FROM alpine:3.15

RUN apk update && \
	apk upgrade && \
	apk add openrc \
	mariadb \
	mariadb-common \
	mariadb-client \
	mariadb-server-utils

RUN	rm -f /etc/mysql/my.cnf \
	/etc/my.cnf \
	~/my.cnf

COPY conf/default.conf /etc/mysql/my.cnf
COPY conf/default.conf /etc/my.cnf
COPY conf/default.conf ~/my.cnf

RUN	mkdir -p /run/mysqld
RUN	mkdir -p /var/lib/mysql

RUN	chown -R mysql /var/lib/mysql
RUN	chmod 777 /var/lib/mysql

COPY conf/entrypoint.sh entrypoint.sh
RUN	chmod +x entrypoint.sh

ENTRYPOINT	["./entrypoint.sh"]

