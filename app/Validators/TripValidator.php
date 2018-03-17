<?php

namespace Someline\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

class TripValidator extends LaravelValidator {

    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'name' => 'required|unique:airports',
            'userId' => 'required',
        ],
        ValidatorInterface::RULE_UPDATE => [],
   ];

}