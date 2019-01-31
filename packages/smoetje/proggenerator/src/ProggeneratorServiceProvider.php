<?php

namespace Smoetje\Proggenerator;

use Illuminate\Support\ServiceProvider;

class ProggeneratorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('smoetje\proggenerator\SheetMgtController');
    }
}
