<?php

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
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\AccommodationController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [RegistrationController::class,'home']);

Route::get('/signup', [RegistrationController::class,'create']);
Route::get('/su-resort', [RegistrationController::class,'createresort']);
Route::post('/su-resort', [RegistrationController::class,'storeresort']);
Route::get('/su-bnb', [RegistrationController::class,'createbnb']);
Route::post('/su-bnb', [RegistrationController::class,'storebnb']);
Route::get('/su-rentalvehicles', [RegistrationController::class,'createrentalv']);
Route::post('/su-rentalvehicles', [RegistrationController::class,'storerentalv']);
Route::get('/su-restoncafe', [RegistrationController::class,'createresto']);
Route::post('/su-restoncafe', [RegistrationController::class,'postresto']);
Route::get('/su-tourspot', [RegistrationController::class,'createtour']);
Route::post('/su-tourspot', [RegistrationController::class,'storetour']);


Route::get('/verification', [RegistrationController::class,'verification']);
Route::get('/subscription', [RegistrationController::class,'subscription']);

Route::get('/login', [SessionController::class,'create']);
Route::post('/login', [SessionController::class,'store']);
Route::get('/logout', [SessionController::class,'destroy']);


Route::get('/resortNewProfile', [AccommodationController::class,'create']);
Route::get('/addAccommodation', [AccommodationController::class,'addAccommodation']);
Route::get('/page2', [RegistrationController::class,'page2']);