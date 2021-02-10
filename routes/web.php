<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('home', 'App\Http\Controllers\HomeController@index')->middleware('auth');

Route::get('get_available_seat/{airline_id}', 'App\Http\Controllers\BookingController@get_available_seat')->middleware('auth');

Route::get('passenger_list/{booking_number}', 'App\Http\Controllers\BookingController@get_passenger_list')->middleware('auth');

Route::get('get_aircraft_detail/{aircraft_id}', 'App\Http\Controllers\BookingController@get_aircraft_detail')->middleware('auth');

Route::post('booking/assign_seat', 'App\Http\Controllers\BookingController@assign_seats')->middleware('auth');

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');
