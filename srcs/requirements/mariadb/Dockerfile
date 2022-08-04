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
RUN service mysql start

CMD ["mysqld"]

# docker build -t db_img . 
# docker run -d db_img