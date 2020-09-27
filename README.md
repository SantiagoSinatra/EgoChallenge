# EgoChallenge
Laravel based website for EGO Company.

## Project Requirements
* PHP 7.4.10 or superior.
* Laravel V8.0.1 or superior.
* Node 14.7.0 or superior.
* XAMMP or PHP MyAdmin.

## Project Installation
* Clone the repo
* Go inside the application folder (EgoChallenge) using a terminal.
* Run `composer install`
* Copy the contents of `.env.example` inside the `.env` file
* Go to xampp or to phpMyAdmin and create a db named `egochallenge` (the name is optional but remember that if you want to use another name you have to change the `DB_DATABASE` field in the .env file)
* Check if the instalation of composer has generated an APP_KEY in the `.env` file if not, run `php artisan key:generate`
* Run `php artisan migrate` in order to generate the database fields (have in mind that for this step you have to have xampp running)
* Run `composer dump-autoload` (this step is optional but highly recommended)
* Run `php artisan db:seed` to feed the database with data.
* Run `php artisan serve` to start the Laravel Server
* Open your favorite browser (chrome/firefox (ie not supported))
* Go to `localhost:8000/` (default port for Laravel)


## Website Pages
* `/` -> goes to the home with all the cars.
* `/carId` -> (carId == number between 1 and 12 inclusive) shows the file page of the car.

## Miscellaneous / Additional Information about the project
* _the order and filter buttons/dropdown work_
* _all the links from the navbar (that opens with the hamburguer button) take you to the correspondent page_
