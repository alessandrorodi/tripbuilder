# TripBuilder



TripBuilder is a RESTful API that makes managing trips for customers a breeze.

  - Powered by Laravel, the PHP framework for Web artisans
  - Back-end and front-end completely separated from each other.
  - Loosely coupled classes, strong ORM design.


# Features
  - Lists all the airports in the world
  - Add or remove flights for trips
  - Vue.js for the front-end layer




### Tech

Tripbuilder uses a number of open source projects to work properly:

* [Laravel] - Php framework for Web artisans - Dingo is used for the RESTful API
* [Someline-starter] - A starter project for beautiful php web apps
* [Vue.js] - Beautifully crafted front-end library
* [MySQL] - Database for the back-end

### App
### Installation

Make sure you have PHP 7.1 and [composer] installed


```sh
$ cd tripbuilder
$ composer install
$ yarn install
```

The project requires you to seed the database. Create a database with this following command using your favorite MySQL client.

```sh
CREATE DATABASE `someline_starter` DEFAULT CHARACTER SET = `utf8mb4` DEFAULT COLLATE = `utf8mb4_unicode_ci`;
```

Change the .env file of the project to setup your database.

Then run:
```sh
php artisan migrate
php artisan db:seed
```

For the last step, install Passport for user authentication and generating the relevant keys: 

```sh
php artisan passport:install
```

You should now be able to run the app in localhost, using : 
```sh
php artisan serve
```

Access your web app at your default localhost artisan configuration, default being `localhost:8000` .

### Code
TripBuilder has been developer with PHPStorm.
The files you'll want to look at for the back-end (RESTful API) are located in `app/api` folder.
For the front-end, you'll want to look at the `app/http` folder.
### Design Patterns

Laravel's repository pattern is used. There are four objects. `Airports`, `Trips`, `Flights` and `Users`.

# API Endpoints 

### Random flights to select for a trip
This endpoint is used so we can select a fromAirport and a toAirport for a relevant flight.

* **URL**

  `/airports/random`

* **Method:**

  `GET`
  
*  **URL Params**

    None

* **Data Params**

    None

* **Success Response:**

  * **Code:** `200`
    **Content:** `{...}`

* **Sample Call:**

  ```javascript
    $.ajax({
      url: "/airports/random",
      dataType: "json",
      type : "GET",
      success : function(r) {
        console.log(r);
      }
    });
  ```
### Show the details of a specific Airport
* **URL**

  `/airports/show/{id}`

* **Method:**

  `GET`
  
*  **URL Params**

    `id` - the id of the Airport to get the details for

* **Data Params**

    None

* **Success Response:**

  * **Code:** `200`
    **Content:** `{...}`

* **Sample Call:**

  ```javascript
    $.ajax({
      url: "/airports/random",
      dataType: "json",
      type : "GET",
      success : function(r) {
        console.log(r);
      }
    });
  ```
  
  
### Create a Trip
* **URL**

  `/trips/create`

* **Method:**

  `Post`
  
*  **URL Params**

    None

* **Data Params**

    `name` - the trip's name

* **Success Response:**

  * **Code:** `200`
    **Content:** `{...}`

* **Sample Call:**

  ```javascript
    $.ajax({
      url: "/trips/create",
      dataType: "json",
      type : "POST",
      success : function(r) {
        console.log(r);
      }
    });
  ```


### List all the flights of a trip
Lists all the flights for a specific trip with the `id`

* **URL**

  /trips/{id}/showFlights

* **Method:**

  `GET`
  
*  **URL Params**

    `id` - The trip id associated with the flights

* **Data Params**

    None

* **Success Response:**

  * **Code:** `200`
    **Content:** `{...}`

* **Sample Call:**

  ```javascript
    $.ajax({
      url: "/trips/5/showFlights",
      dataType: "json",
      type : "GET",
      success : function(r) {
        console.log(r);
      }
    });
  ```

### Add a flight to a trip
Adds a flight for a specific trip.
* **URL**

  /trips/addFlight

* **Method:**

  `POST`
  
*  **URL Params**

    None

* **Data Params**

    `tripId` - the id of the trip to add the flight to
    `fromAirport` - the airport to depart from
    `toAirport` - the airport to arrive at

* **Success Response:**

  * **Code:** `200`
    **Content:** `{the flight added}`

* **Sample Call:**

  ```javascript
    $.ajax({
      url: "/trips/addFlight",
      dataType: "json",
      type : "POST",
      success : function(r) {
        console.log(r);
      }
    });
  ```

### Remove a flight from a trip
Removes a flight for a specific trip
* **URL**

  /flights/remove

* **Method:**

  `POST`
  
*  **URL Params**

    None

* **Data Params**

    None

* **Success Response:**

  * **Code:** `204`
    **Content:** `No content`

* **Sample Call:**

  ```javascript
    $.ajax({
      url: "/flights/remove/4",
      dataType: "json",
      type : "POST",
      success : function(r) {
        console.log(r);
      }
    });
  ```
  
### Get all flights in the database
Returns all the flights associated with any trip  

* **URL**

  /flights/all

* **Method:**

  `GET`
  
*  **URL Params**

    None

* **Data Params**

    None

* **Success Response:**

  * **Code:** `200`
    **Content:** `{all flights}`

* **Sample Call:**

  ```javascript
    $.ajax({
      url: "/flights/all",
      dataType: "json",
      type : "POST",
      success : function(r) {
        console.log(r);
      }
    });
  ```
# Web app

This app is accessible at: 


# Development
Further development of this app will require finishing the front-end layer, and setting up a menu to do the following API actions in a GUI-fashion.



   [composer]: <http://getcomposer.org/doc/00-intro.md>
   [laravel]: <https://laravel.com>
   [vue.js]: <https://vuejs.org/>
   [artisan]: <https://laravel.com/docs/5.6/artisan>
   [mysql]: <https://www.mysql.com>
   [someline-starter]: <https://github.com/someline/someline-starter>

