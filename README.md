# Instatracker

App to retrieve Instagram posts

## Prerequisites

Install [Docker](https://docs.docker.com/engine/installation) with docker compose.

## Setting up the environment

Start by cloning this repository, at the root directory run the following command to create your `.env` file

```bash
cp .env.example .env
```

Fill the following variables to make sure to retrieve test users posts. To get an access token for test purpose, please follow these steps (Générateur de token d’utilisateur·ice section): https://developers.facebook.com/docs/instagram-basic-display-api/overview

```bash
INSTAGRAM_ACCESS_TOKEN=
INSTAGRAM_CLIENT_ID=
INSTAGRAM_CLIENT_SECRET=
```

Then ...

```bash
docker compose up -d
```

Enter your web container with docker exec :
```bash
docker exec -ti instatracker_web bash
```

Run the following command to create your Laravel App Key :
```bash
php artisan key:generate
```

You can then down & up your containers :
```bash
docker compose down
docker compose up -d
```

First time on the project, you must run migration from your container
```bash
php artisan migrate
```

If you want data in your database, you can run seed. Seeders will create an InstagramUser using the given __INSTAGRAM_ACCESS_TOKEN__ filled before in .env
```bash
php artisan db:seed
```

Feel free to use the following command to reset your database to initial state (with fake data) :
```bash
php artisan migrate:fresh --seed
```

Then build

## Project details

### Main URLs

* Front : http://instatracker.localhost
* PHPMyAdmin : http://phpmyadmin.instatracker.localhost
* Traefik dashboard : http://traefik.instatracker.localhost:8080

### Laravel & VueJS

We use Laravel as the back-end framework along with Vue JS to build the app.
If you are new to Laravel, please read the [Laravel official documentation](https://laravel.com/docs)

### Code Quality

Overall, please make sure to comment your code to make it easy for people reading your merge request and other developers that may need to use or modify your code.

Before each commit, please make sure you run the following commands:

* `composer phpstan` to analyze PHP code, no errors should be left unfixed (otherwise CI will fail)
* `composer insights` to analyze the code quality, no errors should be left unfixed (otherwise CI will fail)
* `composer phpcbf` to fix PHP code style

### IDE Helper

* `php artisan ide-helper:generate` PHPDoc generation for Laravel Facades
* `php artisan ide-helper:models -M` PHPDocs for models
* `php artisan ide-helper:meta` PhpStorm Meta file

```bash
yarn
```

Then you can build the tool with the following command :

```bash
yarn watch # For development
yarn build # For production
```
