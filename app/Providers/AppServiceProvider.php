<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Observers\AnimalObserver;
use App\Models\Animal;

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
        Animal::observe(AnimalObserver::class);
    }
}
