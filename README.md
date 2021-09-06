# Getting started with installation

## Start with Composer
Run the following command to create an Autoload
### composer install

## Generate a key
### php artisan key:generate

## Change .env file
Set the database name, ID and password in .env file on the root folder

## Migrate tables
### php artisan migrate

## Seed questions
### php artisan db:seed

## Run/Serve the Project
### php artisan serve

# API URLs

## Get question by ID
### GET <URL>/api/v1/get_question/<ID>

## Save result
### POST <URL>/api/v1/result