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
        $api->get('/random', 'AirportsController@randomizeAirports');
        $api->get('/show/{id}', 'AirportsController@show');

    });

    $api->group(['prefix' => 'trips'], function (Router $api) {
        $api->post('/create', 'TripsController@create');
        $api->post('/{id}/remove', 'TripsController@remove');

        $api->get('/{id}/showFlights', 'FlightsController@listFlights');

        $api->post('/addFlight', 'FlightsController@add');
        $api->post('/removeFlight/{id}', 'FlightsController@remove');
    });

    $api->group(['prefix' => 'flights'], function (Router $api) {
        $api->get('/all', 'FlightsController@index');
    });




});