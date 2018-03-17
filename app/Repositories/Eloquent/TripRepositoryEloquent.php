<?php

namespace Someline\Repositories\Eloquent;

use Someline\Models\Foundation\User;
use Someline\Presenters\TripPresenter;
use Someline\Presenters\UserPresenter;
use Someline\Repositories\Criteria\RequestCriteria;
use Someline\Repositories\Interfaces\TripRepository;
use Someline\Repositories\Interfaces\UserRepository;
use Someline\Validators\TripValidator;
use Someline\Validators\UserValidator;

/**
 * Class UserRepositoryEloquent
 * @package namespace Someline\Repositories\Eloquent;
 */
class TripRepositoryEloquent extends BaseRepository implements TripRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Trip::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return TripValidator::class;
    }

    /**
     * Specify Presenter class name
     *
     * @return string
     */
    public function presenter()
    {
        return TripPresenter::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    /**
     * @param array|Collection $userIds
     * @return $this
     */
    public function byTripIds($tripIds)
    {
        $this->model = $this->model->whereIn('id', $tripIds);
        return $this;
    }
}
