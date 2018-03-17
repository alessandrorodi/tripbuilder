<?php

namespace Someline\Http\Controllers;


class AirportController extends BaseController
{

    public function getAirportList()
    {
        return view('app.airports.airport_list');
    }


}