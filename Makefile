all: build

build:
	@docker-compose -f srcs/docker-compose.yml -p inception up -d --build
	@echo "docker services are up"${__EOC}

start:
	@docker-compose -f srcs/docker-compose.yml -p inception start > /dev/null
	@echo "docker services have been started"${__EOC}

stop:
	@docker-compose -f srcs/docker-compose.yml -p inception stop > /dev/null
	@echo "docker services have been stopped"${__EOC}

status:
	@docker-compose -f srcs/docker-compose.yml -p inception ps

clean:
	@rm -rf /home/abouhlel/data/www/* > /dev/null
	@rm -rf /home/abouhlel/data/database/* > /dev/null
	@echo "cleaned docker data"${__EOC}

fclean: clean
	@docker rmi -f nginx > /dev/null
	@docker rmi -f mariadb > /dev/null
	@docker rmi -f wordpress > /dev/null
	@echo "cleaned docker images"${__EOC}
	@docker rm -f nginx > /dev/null
	@docker rm -f mariadb > /dev/null
	@docker rm -f wordpress > /dev/null
	@echo "cleaned docker containers"${__EOC}
	@docker volume rm -f inception_database > /dev/null
	@docker volume rm -f inception_www > /dev/null
	@echo "cleaned docker volumes"${__EOC}
	@docker network rm inception > /dev/null
	@echo "cleaned docker networks"${__EOC}

re: stop fclean all

.PHONY: all start stop status fclean clean re