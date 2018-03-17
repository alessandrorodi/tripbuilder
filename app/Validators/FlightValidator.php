<?php

namespace Someline\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

class FlightValidator extends LaravelValidator {

    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'fromAirport' => 'required',
            'toAirport' => 'required',
            'tripId' => 'required',
        ],
        ValidatorInterface::RULE_UPDATE => [],
    ];

}