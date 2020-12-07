## Getting started
### Installation
Please check the official laravel installation guide for server requirements before you start. Official Documentation

Alternative installation is possible without local dependencies relying on Docker.

### clone the repository
```
git clone https://github.com/pk841442/Todolist.git
```
### Switch to the repo folder
```
cd Todolist
```
### Install all the dependencies using composer
```
composer install
```
### Install npm dependencies

```
npm install
```
### Copy the example env file and make the required configuration changes in the .env file
```
cp .env.example .env
```
### Generate a new application key
```
php artisan key:generate
```

### Generate a new JWT authentication secret key
```
php artisan jwt:generate


```
### Create an empty database for our application
Create an empty database for your project using the database tools you prefer. 

### In the .env file, add database information to allow Laravel to connect to the database

In the .env file fill in the DB_HOST, DB_PORT,DB_DATABASE, DB_USERNAME, and DB_PASSWORD options to match the credentials of the database you just created. This will allow us to run migrations and seed the database in the next step.

### Run the database migrations (Set the database connection in .env before migrating)
```
php artisan migrate
```

### Start the local development server
```
php artisan serve
```
