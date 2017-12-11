<?php

namespace App\Providers;

use App\Helpers\RocketLunch;
use Illuminate\Support\ServiceProvider;
use App\Helpers\RocketShip;

class RocketShipServiceProvider extends ServiceProvider
{
    protected $defer = true;
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
        $this->app->bind('App\Helpers\Contracts\RocketShipContractInterface', function($app) {
            return new RocketShip();
        });
    }

    public function provides()
    {
        return ['App\Helpers\Contracts\RocketShipContractInterface'];
    }
}
