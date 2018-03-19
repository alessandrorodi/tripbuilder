# TripBuilder

This app is accessible at: http://tripbuilder.us-east-2.elasticbeanstalk.com/api/

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
    **Content:** 
```json
{
    "data": [
        {
            "id": 319232,
            "ident": "MXR",
            "name": "Moussoro Airport",
            "iso_country": "TD",
            "continent": "AF",
            "municipality": "Moussoro"
        },
        {
            "id": 321711,
            "ident": "AR-0589",
            "name": "Cañada Quiroz Airport",
            "iso_country": "AR",
            "continent": "SA",
            "municipality": "Corrientes"
        },
        {
            "id": 311787,
            "ident": "RK3X",
            "name": "C 433 Heliport",
            "iso_country": "KR",
            "continent": "AS",
            "municipality": "Worunjeongan"
        },
        {
            "id": 30378,
            "ident": "SCSI",
            "name": "El Salar Airport",
            "iso_country": "CL",
            "continent": "SA",
            "municipality": "Salar De Atacama"
        },
        {
            "id": 17701,
            "ident": "IA23",
            "name": "Gaa Private Airport",
            "iso_country": "US",
            "continent": "NA",
            "municipality": "Guttenberg"
        },
        {
            "id": 28313,
            "ident": "CSW8",
            "name": "Matagami Seaplane Base",
            "iso_country": "CA",
            "continent": "NA",
            "municipality": ""
        },
        {
            "id": 316016,
            "ident": "DE-0311",
            "name": "Isny Airfield",
            "iso_country": "DE",
            "continent": "EU",
            "municipality": "Isny im Allgäu"
        },
        {
            "id": 9504,
            "ident": "2KY7",
            "name": "Taylor County Hospital Heliport",
            "iso_country": "US",
            "continent": "NA",
            "municipality": "Campbellsville"
        },
        {
            "id": 42169,
            "ident": "MNAM",
            "name": "Altamira Airport",
            "iso_country": "NI",
            "continent": "NA",
            "municipality": "Altamira"
        },
        {
            "id": 4546,
            "ident": "LTBX",
            "name": "Samandıra Air Base",
            "iso_country": "TR",
            "continent": "AS",
            "municipality": "Ümraniye"
        },
        {
            "id": 36531,
            "ident": "SJFL",
            "name": "Fazenda Campo Formoso Airport",
            "iso_country": "BR",
            "continent": "SA",
            "municipality": "Sandolândia"
        },
        {
            "id": 20914,
            "ident": "KRBO",
            "name": "Nueces County Airport",
            "iso_country": "US",
            "continent": "NA",
            "municipality": "Robstown"
        },
        {
            "id": 27168,
            "ident": "YWDH",
            "name": "Windorah Airport",
            "iso_country": "AU",
            "continent": "OC",
            "municipality": ""
        },
        {
            "id": 301358,
            "ident": "LYBJ",
            "name": "Airport Lisicji Jarak",
            "iso_country": "RS",
            "continent": "EU",
            "municipality": "Belgrade"
        },
        {
            "id": 39770,
            "ident": "CA-0124",
            "name": "East Templeton Airport",
            "iso_country": "CA",
            "continent": "NA",
            "municipality": "Gatineau"
        },
        {
            "id": 31887,
            "ident": "MBMC",
            "name": "Middle Caicos Airport",
            "iso_country": "TC",
            "continent": "NA",
            "municipality": "Middle Caicos"
        },
        {
            "id": 26298,
            "ident": "XS75",
            "name": "West Ranch Airport",
            "iso_country": "US",
            "continent": "NA",
            "municipality": "Round Mountain"
        },
        {
            "id": 30071,
            "ident": "LJBL",
            "name": "Lesce-Bled Airport",
            "iso_country": "SI",
            "continent": "EU",
            "municipality": "Bled"
        },
        {
            "id": 12958,
            "ident": "64NC",
            "name": "Fields Airport",
            "iso_country": "US",
            "continent": "NA",
            "municipality": "Pleasant Garden"
        },
        {
            "id": 35103,
            "ident": "RU-6560",
            "name": "Ulan-Ude East Airport",
            "iso_country": "RU",
            "continent": "AS",
            "municipality": "Ulan Ude"
        },
        {
            "id": 6922,
            "ident": "07CT",
            "name": "Tnt Heliport",
            "iso_country": "US",
            "continent": "NA",
            "municipality": "Salem"
        },
        {
            "id": 11122,
            "ident": "45KS",
            "name": "Liebau Ranch Airport",
            "iso_country": "US",
            "continent": "NA",
            "municipality": "Grenola"
        },
        {
            "id": 27944,
            "ident": "YSDN",
            "name": "Soudan Station Airport",
            "iso_country": "AU",
            "continent": "OC",
            "municipality": ""
        },
        {
            "id": 321113,
            "ident": "ES-0127",
            "name": "Aeroclub L’Estartit",
            "iso_country": "ES",
            "continent": "EU",
            "municipality": "Estartit"
        },
        {
            "id": 15121,
            "ident": "8OI8",
            "name": "Meridia Huron Hospital Heliport",
            "iso_country": "US",
            "continent": "NA",
            "municipality": "East Cleveland"
        },
        {
            "id": 17460,
            "ident": "FL93",
            "name": "Mount Sinai Medical Center Heliport",
            "iso_country": "US",
            "continent": "NA",
            "municipality": "Miami Beach"
        },
        {
            "id": 6839,
            "ident": "05NJ",
            "name": "Paulus Hook Pier Heliport",
            "iso_country": "US",
            "continent": "NA",
            "municipality": "Jersey City"
        },
        {
            "id": 38797,
            "ident": "AR-0122",
            "name": "Darregueira Airport",
            "iso_country": "AR",
            "continent": "SA",
            "municipality": "Darregueira"
        },
        {
            "id": 312142,
            "ident": "DE-0133",
            "name": "Weper Airfield",
            "iso_country": "DE",
            "continent": "EU",
            "municipality": "Moringen"
        },
        {
            "id": 313356,
            "ident": "YXTN",
            "name": "Trundle Hospital Helicopter Landing Site",
            "iso_country": "AU",
            "continent": "OC",
            "municipality": "Trundle"
        },
        {
            "id": 30020,
            "ident": "EYKD",
            "name": "Kėdainiai Air Base",
            "iso_country": "LT",
            "continent": "EU",
            "municipality": "Kėdainiai"
        },
        {
            "id": 41378,
            "ident": "ID-KOD",
            "name": "Kotabangun Airport",
            "iso_country": "ID",
            "continent": "AS",
            "municipality": "Kotabangun-Borneo Is"
        },
        {
            "id": 15359,
            "ident": "92NH",
            "name": "Morrison Heliport",
            "iso_country": "US",
            "continent": "NA",
            "municipality": "Meredith"
        },
        {
            "id": 42698,
            "ident": "KE-0055",
            "name": "Lake Jipe Airport",
            "iso_country": "KE",
            "continent": "AF",
            "municipality": "Lake Jipe"
        },
        {
            "id": 318308,
            "ident": "AR-0559",
            "name": "Estancia Los Lobles Airport",
            "iso_country": "AR",
            "continent": "SA",
            "municipality": "Uriburu"
        },
        {
            "id": 7580,
            "ident": "0U2",
            "name": "Copper Basin Airport",
            "iso_country": "US",
            "continent": "NA",
            "municipality": "Mackay"
        },
        {
            "id": 36424,
            "ident": "SJAO",
            "name": "Natura Heliport",
            "iso_country": "BR",
            "continent": "SA",
            "municipality": "Cajamar"
        },
        {
            "id": 23450,
            "ident": "NY69",
            "name": "John Gonzales Field",
            "iso_country": "US",
            "continent": "NA",
            "municipality": "Cape Vincent"
        },
        {
            "id": 3501,
            "ident": "KEAU",
            "name": "Chippewa Valley Regional Airport",
            "iso_country": "US",
            "continent": "NA",
            "municipality": "Eau Claire"
        },
        {
            "id": 45231,
            "ident": "RU-0291",
            "name": "Nezhitino Airport",
            "iso_country": "RU",
            "continent": "EU",
            "municipality": "Nezhitino"
        },
        {
            "id": 2674,
            "ident": "ESNC",
            "name": "Hedlanda Airport",
            "iso_country": "SE",
            "continent": "EU",
            "municipality": "Hede"
        },
        {
            "id": 28409,
            "ident": "CNV7",
            "name": "Sault Ste. Marie/Partridge Point Seaplane Base",
            "iso_country": "CA",
            "continent": "NA",
            "municipality": "Sault Ste. Marie"
        },
        {
            "id": 300345,
            "ident": "RKDU",
            "name": "N 104 Helipad",
            "iso_country": "KR",
            "continent": "AS",
            "municipality": "Ulleung-do Island"
        },
        {
            "id": 22210,
            "ident": "MO06",
            "name": "Barton County Memorial Hospital Heliport",
            "iso_country": "US",
            "continent": "NA",
            "municipality": "Lamar"
        },
        {
            "id": 40306,
            "ident": "SVSK",
            "name": "Nuestra Señora del Socorro Airport",
            "iso_country": "VE",
            "continent": "SA",
            "municipality": ""
        },
        {
            "id": 29951,
            "ident": "FYHS",
            "name": "Hobas Airport",
            "iso_country": "NA",
            "continent": "AF",
            "municipality": "Hobas"
        },
        {
            "id": 45554,
            "ident": "8NK3",
            "name": "Harris Airport",
            "iso_country": "US",
            "continent": "NA",
            "municipality": "Fort Ann"
        },
        {
            "id": 21814,
            "ident": "MA71",
            "name": "Davna Corp Heliport",
            "iso_country": "US",
            "continent": "NA",
            "municipality": "Millis"
        },
        {
            "id": 12704,
            "ident": "5U0",
            "name": "Denton Airport",
            "iso_country": "US",
            "continent": "NA",
            "municipality": "Denton"
        },
        {
            "id": 322237,
            "ident": "20MT",
            "name": "Prevost Airport",
            "iso_country": "US",
            "continent": "NA",
            "municipality": "Lambert"
        },
        {
            "id": 19225,
            "ident": "KAAO",
            "name": "Colonel James Jabara Airport",
            "iso_country": "US",
            "continent": "NA",
            "municipality": "Wichita"
        },
        {
            "id": 2811,
            "ident": "FAMJ",
            "name": "Majuba Power Station Airport",
            "iso_country": "ZA",
            "continent": "AF",
            "municipality": "Amerspoort"
        },
        {
            "id": 32560,
            "ident": "VTPU",
            "name": "Uttaradit Airport",
            "iso_country": "TH",
            "continent": "AS",
            "municipality": "Uttaradit"
        },
        {
            "id": 317353,
            "ident": "MX-0120",
            "name": "Nicolas Bravo Airport",
            "iso_country": "MX",
            "continent": "NA",
            "municipality": "Macuspana"
        },
        {
            "id": 16380,
            "ident": "AR93",
            "name": "Ark-Mo Airport",
            "iso_country": "US",
            "continent": "NA",
            "municipality": "Pollard"
        },
        {
            "id": 7035,
            "ident": "09LL",
            "name": "Pine Hill Airport",
            "iso_country": "US",
            "continent": "NA",
            "municipality": "Capron"
        },
        {
            "id": 11172,
            "ident": "46NE",
            "name": "Jantzen Airport",
            "iso_country": "US",
            "continent": "NA",
            "municipality": "Madrid"
        },
        {
            "id": 10513,
            "ident": "3IL6",
            "name": "Pinckneyville Correctional Center Heliport",
            "iso_country": "US",
            "continent": "NA",
            "municipality": "Pinckneyville"
        },
        {
            "id": 27076,
            "ident": "YMTG",
            "name": "Mount Gambier Airport",
            "iso_country": "AU",
            "continent": "OC",
            "municipality": ""
        },
        {
            "id": 45727,
            "ident": "67OG",
            "name": "George Airport",
            "iso_country": "US",
            "continent": "NA",
            "municipality": "Sheridan"
        },
        {
            "id": 17028,
            "ident": "CT73",
            "name": "South Meadows Heliport",
            "iso_country": "US",
            "continent": "NA",
            "municipality": "Hartford"
        },
        {
            "id": 11735,
            "ident": "4TN5",
            "name": "TGP Station 860 Heliport",
            "iso_country": "US",
            "continent": "NA",
            "municipality": "Fairfield"
        },
        {
            "id": 7851,
            "ident": "13Q",
            "name": "Jewett Mesa Airport",
            "iso_country": "US",
            "continent": "NA",
            "municipality": "Apache Creek"
        },
        {
            "id": 5484,
            "ident": "OP35",
            "name": "Juzzak Airport",
            "iso_country": "PK",
            "continent": "AS",
            "municipality": "Juzzak"
        },
        {
            "id": 8543,
            "ident": "1NJ9",
            "name": "Air Tractor Heliport",
            "iso_country": "US",
            "continent": "NA",
            "municipality": "Sussex"
        },
        {
            "id": 12871,
            "ident": "62MI",
            "name": "Combs Airport",
            "iso_country": "US",
            "continent": "NA",
            "municipality": "Samaria"
        },
        {
            "id": 308314,
            "ident": "SS-0016",
            "name": "Panyagor Airstrip",
            "iso_country": "SS",
            "continent": "AF",
            "municipality": ""
        },
        {
            "id": 35467,
            "ident": "SDCX",
            "name": "Centro Empresarial Mourisco Heliport",
            "iso_country": "BR",
            "continent": "SA",
            "municipality": "Rio De Janeiro"
        },
        {
            "id": 4005,
            "ident": "LEBZ",
            "name": "Badajoz Airport",
            "iso_country": "ES",
            "continent": "EU",
            "municipality": "Badajoz"
        },
        {
            "id": 38133,
            "ident": "SWWI",
            "name": "Fazenda Fortaleza Airport",
            "iso_country": "BR",
            "continent": "SA",
            "municipality": "General Carneiro"
        },
        {
            "id": 313166,
            "ident": "AA51",
            "name": "Spy Island Drill-Site Heliport",
            "iso_country": "US",
            "continent": "NA",
            "municipality": "Kuparuk"
        },
        {
            "id": 19955,
            "ident": "KGKY",
            "name": "Arlington Municipal Airport",
            "iso_country": "US",
            "continent": "NA",
            "municipality": "Arlington"
        },
        {
            "id": 38660,
            "ident": "YWRC",
            "name": "Wave Rock Airport",
            "iso_country": "AU",
            "continent": "OC",
            "municipality": ""
        },
        {
            "id": 26442,
            "ident": "VADS",
            "name": "Deesa Airport",
            "iso_country": "IN",
            "continent": "AS",
            "municipality": ""
        },
        {
            "id": 40494,
            "ident": "VE-0145",
            "name": "Pacicuchero Airport",
            "iso_country": "VE",
            "continent": "SA",
            "municipality": ""
        },
        {
            "id": 18620,
            "ident": "K2R9",
            "name": "Karnes County Airport",
            "iso_country": "US",
            "continent": "NA",
            "municipality": "Kenedy"
        },
        {
            "id": 22551,
            "ident": "MU59",
            "name": "Lester E. Cox Medical Center North Heliport",
            "iso_country": "US",
            "continent": "NA",
            "municipality": "Springfield"
        },
        {
            "id": 454,
            "ident": "SSFV",
            "name": "Fazenda Recreio 3 Airport",
            "iso_country": "BR",
            "continent": "SA",
            "municipality": "Ribas do Rio"
        },
        {
            "id": 19053,
            "ident": "K7D3",
            "name": "Baldwin Municipal Airport",
            "iso_country": "US",
            "continent": "NA",
            "municipality": "Baldwin"
        },
        {
            "id": 45946,
            "ident": "4OR1",
            "name": "McNary ARNG Field Heliport",
            "iso_country": "US",
            "continent": "NA",
            "municipality": "Salem"
        },
        {
            "id": 32406,
            "ident": "ZWSS",
            "name": "Shanshan Airport",
            "iso_country": "CN",
            "continent": "AS",
            "municipality": "Shanshan"
        },
        {
            "id": 39219,
            "ident": "SCMP",
            "name": "Melipilla Airport",
            "iso_country": "CL",
            "continent": "SA",
            "municipality": "Melipilla"
        },
        {
            "id": 324329,
            "ident": "KR-0203",
            "name": "Cheonmi-ri South Helipad",
            "iso_country": "KR",
            "continent": "AS",
            "municipality": "Cheonmi-ri"
        },
        {
            "id": 37615,
            "ident": "SSQD",
            "name": "Ilha do Cavaco Heliport",
            "iso_country": "BR",
            "continent": "SA",
            "municipality": "Angra Dos Reis"
        },
        {
            "id": 22148,
            "ident": "MN43",
            "name": "Kanabec Hospital Heliport",
            "iso_country": "US",
            "continent": "NA",
            "municipality": "Mora"
        },
        {
            "id": 32473,
            "ident": "SETI",
            "name": "Tiputini Airport",
            "iso_country": "EC",
            "continent": "SA",
            "municipality": "Tiputini"
        },
        {
            "id": 700,
            "ident": "CBM5",
            "name": "Telegraph Creek Airport",
            "iso_country": "CA",
            "continent": "NA",
            "municipality": "Telegraph Creek"
        },
        {
            "id": 29924,
            "ident": "MMGT",
            "name": "Rancho Medio Sitio Airport",
            "iso_country": "MX",
            "continent": "NA",
            "municipality": "Silao"
        },
        {
            "id": 1166,
            "ident": "CKC7",
            "name": "Rockglen Airport",
            "iso_country": "CA",
            "continent": "NA",
            "municipality": "Rockglen"
        },
        {
            "id": 35884,
            "ident": "SICF",
            "name": "Vol D`Oiseal Heliport",
            "iso_country": "BR",
            "continent": "SA",
            "municipality": "São Paulo"
        },
        {
            "id": 325374,
            "ident": "ID-0176",
            "name": "Bari Airport",
            "iso_country": "ID",
            "continent": "AS",
            "municipality": "Bari"
        },
        {
            "id": 16654,
            "ident": "CD23",
            "name": "Aero Bear Field",
            "iso_country": "US",
            "continent": "NA",
            "municipality": "Calhan"
        },
        {
            "id": 36436,
            "ident": "SJBF",
            "name": "Fazenda J.K. Airport",
            "iso_country": "BR",
            "continent": "SA",
            "municipality": "Mimoso De Goiás"
        },
        {
            "id": 22579,
            "ident": "MU99",
            "name": "Fabick-Colmarile Heliport",
            "iso_country": "US",
            "continent": "NA",
            "municipality": "Fenton"
        },
        {
            "id": 317693,
            "ident": "GB-0270",
            "name": "Mitchell's Farm Airstrip",
            "iso_country": "GB",
            "continent": "EU",
            "municipality": ""
        },
        {
            "id": 22006,
            "ident": "ME91",
            "name": "Webster Field",
            "iso_country": "US",
            "continent": "NA",
            "municipality": "Gorham"
        },
        {
            "id": 21630,
            "ident": "LL97",
            "name": "Rockenbach Airport",
            "iso_country": "US",
            "continent": "NA",
            "municipality": "Round Lake"
        },
        {
            "id": 12607,
            "ident": "5OR1",
            "name": "Helitradewinds Heliport",
            "iso_country": "US",
            "continent": "NA",
            "municipality": "Molalla"
        },
        {
            "id": 30103,
            "ident": "LZPT",
            "name": "Male Bielice",
            "iso_country": "SK",
            "continent": "EU",
            "municipality": "Partizánske"
        },
        {
            "id": 318603,
            "ident": "TZ-0042",
            "name": "Mkangira Airport",
            "iso_country": "TZ",
            "continent": "AF",
            "municipality": "Mkangira"
        }
    ]
}
```

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
  
    **Content:** 
```json{
    "data": {
         "id": 7,
         "ident": "UD21",
         "name": "Yerevan Yegvard Airport",
         "iso_country": "AM",
         "continent": "AS",
         "municipality": "Yerevan"
     }
   }
```

* **Sample Call:**

  ```javascript
    $.ajax({
      url: "/airports/show/7",
      dataType: "json",
      type : "GET",
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
    **Content:** 
```json
{
    "data": [
        {
            "id": 5,
            "fromAirport": "SA05",
            "toAirport": "SA20",
            "tripId": 5,
            "created_at": "2018-03-16 17:27:01"
        }
    ]
}
```

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
    **Content:** 
    ```json
    {
        "data": {
            "id": 7,
            "fromAirport": "CYUL",
            "toAirport": "SA20",
            "tripId": "5",
            "created_at": "2018-03-19 18:52:06"
        }
    }
    ```

* **Sample Call:**

  ```javascript
    $.ajax({
      url: "/trips/addFlight",
      data: { tripId : 5, fromAirport: "CYUL", toAirport: "SA20" },
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
    **Content:** 
```json
    {
        "data": [
            {
                "id": 5,
                "fromAirport": "SA05",
                "toAirport": "SA20",
                "tripId": 5,
                "created_at": "2018-03-17 20:27:11"
            },
            {
                "id": 7,
                "fromAirport": "CYUL",
                "toAirport": "SA20",
                "tripId": 5,
                "created_at": "2018-03-19 18:52:06"
            }
        ]
    }
```

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

This app is accessible at: http://tripbuilder.us-east-2.elasticbeanstalk.com/api/


# Development
Further development of this app will require finishing the front-end layer, and setting up a menu to do the following API actions in a GUI-fashion.
-Create a trip with a defined name

   [composer]: <http://getcomposer.org/doc/00-intro.md>
   [laravel]: <https://laravel.com>
   [vue.js]: <https://vuejs.org/>
   [artisan]: <https://laravel.com/docs/5.6/artisan>
   [mysql]: <https://www.mysql.com>
   [someline-starter]: <https://github.com/someline/someline-starter>

