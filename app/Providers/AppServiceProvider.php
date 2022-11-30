<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->share('global', '就決定是你了');
        view()->composer(['test.*'], function ($view) {
            $view->with('multi', '多龍巴魯特 ');
            $view->with('multi1', '多龍梅西亞');
        });
    }
}