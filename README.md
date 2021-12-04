![GitHub language count](https://img.shields.io/github/languages/count/niece1/referral-links-component)
![GitHub top language](https://img.shields.io/github/languages/top/niece1/referral-links-component)
![GitHub repo size](https://img.shields.io/github/repo-size/niece1/referral-links-component)
![GitHub contributors](https://img.shields.io/github/contributors/niece1/elasticsearch-with-laravel)
![GitHub last commit](https://img.shields.io/github/last-commit/niece1/referral-links-component)
![GitHub](https://img.shields.io/github/license/niece1/referral-links-component)

## Intro

This repo is an example of referral url link functionality using Laravel.

## Usage

If it happens you decide to run it on your machine make sure you have [Docker installed](https://docs.docker.com/docker-for-mac/install/).

Clone repository.

From your terminal window at the project root spin up the containers for the web server by running
```
docker-compose up -d --build
```
The following are built for our web server, with their exposed ports detailed:

- **nginx** - :8088
- **mysql** - :4306
- **php** - :9000
- **phpmyadmin** - :8081
- **mailhog** - :8025

One additional container is included that handles NPM.

Depending on operating system, you may encounter rights problems so make sure you have appropriate writable rights for project folder.

In your **.env** file fill in variables related to database, especially pay attention to DB_HOST to be specified as mysql.

MAIL_HOST should be specified as mailhog.

To perform database migrations run:
```
docker-compose run --rm artisan migrate
```

## Key features

Create account and login, to act as authentificated user. Send an email to the user you want to, for example, give a discount.
A recipient after receiving an email, that contains a referral link, will be redirected to your application by hitting this link. He
also should create account or login. This way within subscriptions page a customer will be able use his discount. To achive specified
functionality, an app uses tokens and cookies.

## Technical features

```
- Macros
- Mails
- Events/Listeners
- Validation rules
- Laravel Breeze authentification
```

## License

This is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
