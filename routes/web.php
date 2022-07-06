<?php

use App\Http\Controllers\CarsController;
use App\Models\CarImage;
use App\Models\Cars;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $cars = Cars::with('CarImage')->get();
    return view('welcome', compact('cars'));
});

Auth::routes();

Route::resource('cars', CarsController::class)->middleware('auth');
