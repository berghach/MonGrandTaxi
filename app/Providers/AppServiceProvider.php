<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\User;
use App\Models\Route;
use App\Models\DriverSchedule;
use App\Http\Controllers\citiesController;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('dashboard', function($view){
            $users = User::all();
            $routes = Route::all();
            $schedules  = DriverSchedule::all();
            // Fetch cities data directly in the layout
            $citiesController = new CitiesController();
            $citiesData = $citiesController->getCitiesData();

            $view->with('users', $users)->with('routes', $routes)->with('schedules', $schedules)->with('cities', $citiesData);
        });
    }
}
