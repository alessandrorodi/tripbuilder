<?php

namespace Someline\Repositories\Eloquent;

use Someline\Presenters\AirportPresenter;
use Someline\Repositories\Criteria\RequestCriteria;
use Someline\Repositories\Interfaces\AirportRepository;
use Someline\Validators\AirportValidator;
use Someline\Models\Foundation\Airport;
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
        return Airport::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return AirportValidator::class;
    }

    /**
     * Specify Presenter class name
     *
     * @return string
     */
    public function presenter()
    {
        return AirportPresenter::class;
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


    public function randomizeAirports(){
        $this->model = $this->model->inRandomOrder()->limit(100)->get();
        return $this->parserResult($this->model);
    }
}
