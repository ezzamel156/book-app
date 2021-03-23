## Setup walkthrough

Please follow the steps below to get the application up and running :

1. run `git clone https://github.com/ezzamel156/book-app.git`
1. navigate to project root directory
1. run `composer create-project` in cmd
1. create a database in mysql called `book_app`
1. Edit the following key-value pairs in .env file according to your existing mysql setup

    `DB_HOST=127.0.0.1`\
    `DB_PORT=3306`\
    `DB_DATABASE=book_app`\
    `DB_USERNAME=root`\
    `DB_PASSWORD=`

1. run `php artisan migrate:fresh -seed` in cmd
1. run `php artisan serve` in cmd
1. go to your browser and navigate to `localhost:8000` 
1. login using the following credentials 

    `email : admin@gmail.com`\
    `password : admin`