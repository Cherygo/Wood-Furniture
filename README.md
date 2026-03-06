# Wood Furniture

This application is built with a modern, full-stack architecture. It uses **Vue.js** for the front-end, **Laravel** for the back-end, **Inertia.js** for seamless routing, a **PostgreSQL** database, and **Filament** for the admin panel.

## Prerequisites

Ensure you have the following installed on your machine for a seamless application run:
* [Git](https://git-scm.com/)
* [Docker](https://www.docker.com/products/docker-desktop/)

## Local Setup
Follow these steps to get the project running locally:

### 1. Clone the repository
Clone the project to your local machine and navigate into the folder:
```bash
    git clone https://github.com/Cherygo/Wood-Furniture <your-folder>
    cd <your-folder>
```

### 2. Boot the containers
Start the Docker containers in the background. Give it some time to automatically download the PHP/Node  
dependencies and build the frontend assets.

```bash
  docker compose up -d
```
### 3. Set up Environment Variables
Create your local environment file by duplicating the example file:

```bash
  cp .env.example .env
````
###### This project is pre-configured to use PostgreSQL. If you decide to use a database other than pgsql, the application may not run as expected and will require manual editing of the .env and docker-compose.yml file.

Once your .env file is created, generate your application security key:

```bash
  docker compose exec app php artisan key:generate
```

### 4. Run DB Migrations and Seeders
Create your database tables and populate them with initial data:

```bash
    docker compose exec app php artisan migrate
    docker compose exec app php artisan db:seed
```

## Accessing the Application
Once everything is installed and running, you can view the application in your browser:

Main Website: http://localhost:8000

Filament Admin Panel: http://localhost:8000/admin

## Useful Docker Commands
Here are a few handy commands for managing your local environment:

Run any Artisan command: docker compose exec app php artisan <command>

Restart the application: docker compose restart app

View live error logs: docker compose logs -f app

Shut down the project: docker compose down

Shut down and wipe the database completely: docker compose down -v
