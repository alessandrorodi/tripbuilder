<?php
namespace Someline\Models\Foundation;
use Illuminate\Database\Eloquent\Model;


class Flight extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fromAirport','toAirport','tripId',
    ];


}