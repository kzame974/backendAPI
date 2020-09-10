# backendAPI

###This is a POC for User Authentification with CSRF token.

### INSTALL & SETING UP THE POC
run `composer install`

change the DATABASE_URL on the .env and run

 `php bin/console doctrine:database:create`
 
 then  `php bin/console doctrine:migrations:migrate`
 
 ## RUN SYMFONY
 use `symfony server:start` to run the POC.

## GENERATE USER
run postman and setup the route http://127.0.0.1:8000/api/users with methode `POST`

on the body, create a JSON like this: 
{
  "email": "toto@toto.com",
  "password": "coucou",
  "firstname": "dev",
  "lastname": "ludo"
}

## LOGIN FORM
on your browser go on http://127.0.0.1:8000/
and login your user.

ENJOY
