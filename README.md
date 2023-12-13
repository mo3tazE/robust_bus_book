# Bus booking system

this project implementing a fleet-management system (bus-booking
system) .

## Table of Contents

- [Project Name](#project-name)
  - [Table of Contents](#table-of-contents)
  - [Introduction](#introduction)
  - [Features](#features)
  - [Getting Started](#getting-started)
    - [Prerequisites](#prerequisites)
    - [Installation](#installation)
  - [Usage](#usage)
  - [Contributing](#contributing)
  - [License](#license)
  - [Acknowledgements](#acknowledgements)

## Introduction

Provide a brief introduction to your project. What does it do? What problem does it solve?

## Features

List key features or functionalities of your project.

## Getting Started



### Installation

1. **Clone the Repository:**

   git clone https://github.com/mo3tazE/robust_bus_book.git

   cd project folder

   composer install

 2. ** env**
 
 Update the .env file with database configuration:


DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=fleets2
DB_USERNAME=api    
DB_PASSWORD=123  

 2. **Data migrations and seeding**

## run migrations:

php artisan migrate


## seeding db :

run the following in same order

php artisan db:seed --class=StationSeeder

php artisan db:seed --class=TripSeeder


php artisan db:seed --class=BusSeeder 

php artisan db:seed --class=SeatsSeeder

3. **run project**

php artisan serve

4. **API Collection**

attached in mail a postman collection of the following endpoints:

api/register
api/login
api/fleet/listSeats
api/fleet/book


5. ** authentication **

-JWT auth used to authenticate all requests
-all methods require user to be authenticated so call register then login first



6. **logic**

--/listSeats:

param: 
from : source statiob id , 
to: destination station id(

it will return all available seats according to the source and destination

--/book:

param:

from : source statiob id , 
to: destination station id

i prefered here to make the book function to get from and to destinations not seat id , in order to make it more 
easier for user to get the most recent available seat nor just the one returned from listseats



6. **Mail Attachments**

- Database dump with proper data to be tested.(from seeders alraedy)
- postman collection
- github repolink
