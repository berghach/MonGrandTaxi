<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\User;
use App\Models\Route;
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
            // Fetch cities data directly in the layout
            $citiesData = [CitiesController::class, 'getCitiesData'];

            $view->with('users', $users)->with('routes', $routes)->with('cities', $citiesData);
        });
    }
}
