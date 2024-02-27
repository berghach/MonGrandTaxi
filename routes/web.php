<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\routeController;
use App\Http\Controllers\scheduleController;
use App\Http\Controllers\userController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/homepage', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('homepage');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/homepage/store',[routeController::class, 'store'])->name('route.add');
Route::delete('/homepage/delete/{route}', [routeController::class, 'delete'])->name('route.delete');
Route::post('/homepage/store-schedule',[scheduleController::class, 'store'])->name('schedule.add');


require __DIR__.'/auth.php';
