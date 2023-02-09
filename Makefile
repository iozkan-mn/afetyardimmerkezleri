build:
	docker-compose up -d --build --remove-orphans

up:
	docker-compose up -d --build --remove-orphans

down:
	docker-compose down

bash:
	docker exec -it app sh

logs:
	docker logs app

restart:
	$(MAKE) down
	$(MAKE) up

migrate:
	docker exec -it app php artisan migrate

migrate_fresh:
	docker exec -it app php artisan migrate:fresh
