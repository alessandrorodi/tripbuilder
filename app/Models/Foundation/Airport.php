<?php

namespace Someline\Models\Foundation;
use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','ident','name','iso_country','continent','municipality',
    ];


}