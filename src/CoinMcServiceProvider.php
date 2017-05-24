<?php

namespace Andskur\CoinMc-laravel;

use Illuminate\Support\ServiceProvider;
use Andskur\CoinMc-laravel\CoinMcContainer;

class CoinMcProvider extends ServiceProvider
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
        $this->app->bind('CoinMc', function () {
            return new CoinMcContainer();
        });
    }
}
