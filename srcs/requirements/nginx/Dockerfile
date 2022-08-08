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
RUN apt install -y openssl

RUN		mkdir -p /etc/nginx/ssl/public/
RUN		mkdir -p /etc/nginx/ssl/private/

RUN		openssl \
			req -x509 -nodes -days 365 -newkey rsa:2048 \
			-keyout /etc/nginx/ssl/private/wordpress.key \
			-out /etc/nginx/ssl/public/wordpress.crt \
			-subj \
			"/C=FR/ST=PACA/L=Nice/O=42 Nice/CN=abouhlel.42.fr"

RUN		rm -f /etc/nginx/conf.d/default.conf
RUN		rm -f /etc/nginx/sites-enabled/default

COPY	conf/nginx.conf         /etc/nginx/nginx.conf
COPY	conf/wordpress.conf     /etc/nginx/conf.d/wordpress.conf

CMD ["nginx", "-g", "daemon off;"]

# docker build -t nginx_img . 
# docker run -d nginx_img