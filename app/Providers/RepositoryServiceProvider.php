<?php

namespace Someline\Providers;

use Illuminate\Support\ServiceProvider;
use Someline\Models\Foundation\Flight;
use Someline\Repositories\Eloquent\AirportRepositoryEloquent;
use Someline\Repositories\Eloquent\FlightRepositoryEloquent;
use Someline\Repositories\Eloquent\TripRepositoryEloquent;
use Someline\Repositories\Eloquent\UserRepositoryEloquent;
use Someline\Repositories\Interfaces\AirportRepository;
use Someline\Repositories\Interfaces\FlightRepository;
use Someline\Repositories\Interfaces\TripRepository;
use Someline\Repositories\Interfaces\UserRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UserRepository::class, UserRepositoryEloquent::class);
        $this->app->bind(AirportRepository::class, AirportRepositoryEloquent::class);
        $this->app->bind(FlightRepository::class, FlightRepositoryEloquent::class);
        $this->app->bind(TripRepository::class, TripRepositoryEloquent::class);

        //:end-bindings:
    }
}
