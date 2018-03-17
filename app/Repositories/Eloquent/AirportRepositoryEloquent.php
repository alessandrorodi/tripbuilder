<?php

namespace Someline\Repositories\Eloquent;

use Someline\Models\Foundation\User;
use Someline\Presenters\FlightPresenter;
use Someline\Presenters\TripPresenter;
use Someline\Presenters\UserPresenter;
use Someline\Repositories\Criteria\RequestCriteria;
use Someline\Repositories\Interfaces\AirportRepository;
use Someline\Repositories\Interfaces\FlightRepository;
use Someline\Repositories\Interfaces\TripRepository;
use Someline\Repositories\Interfaces\UserRepository;
use Someline\Validators\FlightValidator;
use Someline\Validators\TripValidator;
use Someline\Validators\UserValidator;

/**
 * Class UserRepositoryEloquent
 * @package namespace Someline\Repositories\Eloquent;
 */
class AirportRepositoryEloquent extends BaseRepository implements AirportRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Flight::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return FlightValidator::class;
    }

    /**
     * Specify Presenter class name
     *
     * @return string
     */
    public function presenter()
    {
        return FlightPresenter::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }


    /**
     * Will return all the airports for airport ids
     * @param int $tripId
     * @return $this
     */
    public function byAirportIds($airportIds)
    {
        $this->model = $this->model->whereIn('id', $airportIds);
        return $this;
    }
}
