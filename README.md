Step:1 Clone the repository

    git clone https://github.com/ragulaust/car_listing.git

Step:2 Switch to the repo folder

    cd car_listing

Step:3 Install all the dependencies using composer

    composer install

Step:4 Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Step:5 Generate a new application key

    php artisan key:generate

Step:6 Run the database migrations (Set the database connection in .env before migrating)

    php artisan migrate

Step:7 Start the local development server

    php artisan serve
