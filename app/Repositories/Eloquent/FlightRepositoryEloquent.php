<?php

namespace Someline\Repositories\Eloquent;

use Someline\Presenters\FlightPresenter;
use Someline\Repositories\Criteria\RequestCriteria;
use Someline\Repositories\Interfaces\FlightRepository;
use Someline\Validators\FlightValidator;
use Someline\Models\Foundation\Flight;

/**
 * Class UserRepositoryEloquent
 * @package namespace Someline\Repositories\Eloquent;
 */
class FlightRepositoryEloquent extends BaseRepository implements FlightRepository
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
     * @param array|Collection $flightIds
     * @return $this
     */
    public function byFlightIds($flightIds)
    {
        $this->model = $this->model->whereIn('id', $flightIds);
        return $this;
    }

    /**
     * @param array|Collection $fromAirports
     * @return $this
     */
    public function byFromAirports($fromAirports)
    {
        $this->model = $this->model->whereIn('fromAirport', $fromAirports);
        return $this;
    }

    /**
     * @param array|Collection $toAirports
     * @return $this
     */
    public function byToAirports($toAirports)
    {
        $this->model = $this->model->whereIn('toAirport', $toAirports);
        return $this;
    }

    /**
     * Will return all the flights for a specific trip
     * @param int $tripId
     * @return $this
     */
    public function byTripId($tripId)
    {
        $this->model = $this->model->whereIn('tripId', $tripId);
        return $this;
    }

    /**
     * Returns all the flights for a specific trip
     * @param int tripId
     * @return $this
     */
    public function listFlightsPerTrip($tripId)
    {
        $this->model = $this->model->join('trips',"trips.id",'=',"flights.tripId","inner")->get();
        return $this->parserResult($this->model);
    }
}
