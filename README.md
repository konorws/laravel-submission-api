# Setup

up docker
```shell
docker-compose up -d
```

go to docker
```shell
docker exec -it <ID CONTAINER PHP-FPM> bash

composer install
php artisan migrate
php artisan queue:work
```

PHP UNIT
```shell
docker exec -it <ID CONTAINER PHP-FPM> bash

php artisan test --filter=SubmissionServiceTest
```


CURL for test
```shell
curl --location 'localhost/api/submit' \
--header 'Content-Type: application/json' \
--data-raw '{
      "name": "John Doe",
      "email": "john.doe@example.com",
      "message": "This is a test message."
 }'
```
