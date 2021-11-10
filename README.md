# Project Name : Student management System

This project runs with Laravel version 8

Getting started
Assuming you've already installed on your machine: PHP (>= 7.3.0), Laravel, Composer and WAMP server.

# install dependencies
composer install


# .env file db  
    create a db with name  : student_management_db
    then use the db name in .env file
    after thatb run the command
    
    php artisan config:cache

# To run the project on server (local host)
php artisan serve


# migrate table 

    php artisan migrate


The Laravel sample project is now up and running! Access it at http://localhost:8000

# url path

Home : http://localhost:8000/

Student Details : http://localhost:8000/student

Mark Details : http://localhost:8000/mark

Or

Use home page menu links



