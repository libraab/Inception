# ███╗   ██╗     ██████╗     ██╗    ███╗   ██╗    ██╗  ██╗
# ████╗  ██║    ██╔════╝     ██║    ████╗  ██║    ╚██╗██╔╝
# ██╔██╗ ██║    ██║  ███╗    ██║    ██╔██╗ ██║     ╚███╔╝
# ██║╚██╗██║    ██║   ██║    ██║    ██║╚██╗██║     ██╔██╗
# ██║ ╚████║    ╚██████╔╝    ██║    ██║ ╚████║    ██╔╝ ██╗
# ╚═╝  ╚═══╝     ╚═════╝     ╚═╝    ╚═╝  ╚═══╝    ╚═╝  ╚═╝

FROM debian:buster

RUN apt update
RUN apt upgrade -y
RUN apt install -y nginx

# copy the modified file fron conf folder to where sys folder
COPY ./conf/default ./etc/nginx/sites-available
# copy the php file from conf folder to ⬇️
COPY ./conf/info.php ./var/www/html


CMD ["nginx", "-g", "daemon off;"]

# docker build -t nginx_img . 
# docker run -d nginx_img