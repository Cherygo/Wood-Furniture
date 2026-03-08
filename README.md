# Wood Furniture

This application is built with a modern, full-stack architecture. It uses **Vue.js** for the front-end, **Laravel** for the back-end, **Inertia.js** for seamless routing, a **PostgreSQL** database, and **Filament** for the admin panel.

> **Note:** The pictures show how the website will look after you run migrations and seed databases. Refer to Local Setup section for instructions.
Main page
<img width="2028" height="1109" alt="image" src="https://github.com/user-attachments/assets/8ebaf6e1-399f-4373-b770-56a3430b2c1f" />

Catalog
<img width="2030" height="1112" alt="image" src="https://github.com/user-attachments/assets/a5b1d511-1fc1-44ff-9cb7-b7c1c56f653d" />

Registration
<img width="2032" height="1118" alt="image" src="https://github.com/user-attachments/assets/f469ecf4-662b-4850-9dfd-9a0bd09aa7b3" />

Admin panel
<img width="2047" height="1113" alt="image" src="https://github.com/user-attachments/assets/0eb6b656-11b6-4d09-842b-e47a19c27ed4" />

---

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
> **Note:** To access the admin panel do the following: Create an account -> Go to the admin panel url -> Login using your newly created account credentials

## Useful Docker Commands
Here are a few handy commands for managing your local environment:

Run any Artisan command: docker compose exec app php artisan <command>

Restart the application: docker compose restart app

View live error logs: docker compose logs -f app

Shut down the project: docker compose down

Shut down and wipe the database completely: docker compose down -v
