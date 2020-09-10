# backendAPI

###This is a POC for User Authentification with CSRF token.

## Install & RUN POC
run `composer install`
change the DATABASE_URL on the .env and run
 `php bin/console doctrine:database:create`

## `generate fixture user`
use this commande `php bin/console doctrine:fixture:load --no-interaction`
to generate fakes users
