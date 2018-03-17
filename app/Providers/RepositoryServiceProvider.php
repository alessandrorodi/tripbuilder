<?php

namespace Someline\Providers;

use Illuminate\Support\ServiceProvider;
use Someline\Repositories\Eloquent\AirportRepositoryEloquent;
use Someline\Repositories\Eloquent\UserRepositoryEloquent;
use Someline\Repositories\Interfaces\AirportRepository;
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

        //:end-bindings:
    }
}
