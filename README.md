# Getting started with installation

### Start with Composer
Run the following command to create an Autoload
```sh
composer install
```

### Generate a key
```sh
php artisan key:generate
```

### Change .env file
Set the database name, ID and password in .env file on the root folder

### Migrate tables
```sh
php artisan migrate
```

### Seed questions
```sh
php artisan db:seed
```

## Run/Serve the Project
```sh
php artisan serve
```

Verify the deployment by navigating to your server address in
your preferred browser.

# API URLs

### Get question by ID
> GET <URL>/api/v1/get_question/<ID>

### Save result
> POST <URL>/api/v1/result