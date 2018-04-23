<?php

namespace Zplan\Storefinder;

use Illuminate\Support\ServiceProvider;

class StorefinderServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        include __DIR__.'/routes.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // register our controller
        $this->app->make('Zplan\Storefinder\StorefinderController');
        $this->loadViewsFrom(__DIR__.'/views', 'storefinder');
    }
}
