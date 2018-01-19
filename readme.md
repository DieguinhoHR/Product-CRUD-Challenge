## About Project

A Product CRUD is an web interface to manage the Create, Read, Updated and Delete of products.
- You should clone the project: git clone https://github.com/DieguinhoHR/Product-CRUD-Challenge.git
- Run project with docker: 'docker-compose up'
- Run composer: 'docker-compose run app composer update'
- You should copy the file .env.example (linux): 'cp .env.example .env'
- Run command to key generate: 'docker-compose run app php artisan key:generate'
- Create database: product-crud
- **Config for database in the file .env** 
  - DB_CONNECTION=mysql
  - DB_HOST=127.0.0.1 (obs: ip running in the docker in your machine)
  - DB_PORT=3306
  - DB_DATABASE=product-crud
  - DB_USERNAME=product-crud
  - DB_PASSWORD=product-crud
- Run command for create database: docker-compose run app php artisan migrate
- Run commando for populate tables: docker-compose run app php artisan db:seed 

Obs: You should create a new user for login in the system.