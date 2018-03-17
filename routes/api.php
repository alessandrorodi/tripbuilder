<?php

use Illuminate\Http\Request;
use Dingo\Api\Routing\Router;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// v1
$api->version('v1', [
    'namespace' => 'Someline\Api\Controllers',
    'middleware' => ['api']
], function (Router $api) {

    $api->group(['prefix' => 'airports'], function (Router $api) {
        $api->get('/all', 'AirportsController@index');
        $api->get('/random', 'AirportsController@randomizeAirports');
        $api->get('/show/{id}', 'AirportsController@show');

    });

    $api->group(['prefix' => 'trips'], function (Router $api) {
        $api->post('/create', 'TripController@create');
        $api->post('/{id}/remove', 'TripController@remove');

        $api->post('/addFlight', 'FlightsController@add');
        $api->post('/removeFlight/{id}', 'FlightsController@remove');
    });

    $api->group(['prefix' => 'flights'], function (Router $api) {
        $api->get('/all', 'FlightsController@index');
    });

    $api->group(['middleware' => ['auth:api']], function (Router $api) {

        // Rate: 100 requests per 5 minutes
        $api->group(['middleware' => ['api.throttle'], 'limit' => 100, 'expires' => 5], function (Router $api) {

            // /users
            $api->group(['prefix' => 'users'], function (Router $api) {
                $api->get('/', 'UsersController@index');
                $api->post('/', 'UsersController@store');
            });




        });

    });


});