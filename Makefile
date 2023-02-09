build:
	docker-compose up -d --build --remove-orphans

up:
	docker-compose up -d --remove-orphans

down:
	docker-compose down

bash:
	docker exec -it backend sh

logs:
	docker logs backend

restart:
	$(MAKE) down
	$(MAKE) up
