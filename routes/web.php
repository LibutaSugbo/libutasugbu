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
use App\Http\Controllers\HostController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\AccommodationController;
use App\Http\Controllers\RegistrationController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [HostController::class,'home']);
Route::get('/su_host_traveler', function () {
    return view('su_host_traveler');
});

Route::get('/signup', [HostController::class,'create']);
Route::get('/su-resort', [HostController::class,'createresort']);
Route::post('/storeSu_resort', [HostController::class,'storeresort']);
Route::get('/su-bnb', [HostController::class,'createbnb']);
Route::post('/storeSu_bnb', [HostController::class,'storebnb']);
Route::get('/su-rentalvehicles', [HostController::class,'createrentalv']);
Route::post('/storeSu_rentalvehicles', [HostController::class,'storerentalv']);
Route::get('/su-restoncafe', [HostController::class,'createresto']);
Route::post('/storeSu_restoncafe', [HostController::class,'postresto']);
Route::get('/su-tourspot', [HostController::class,'createtour']);
Route::post('/storeSu_tourspot', [HostController::class,'storetour']);


Route::get('/verification', [RegistrationController::class,'verification']);
Route::get('/subscription', [RegistrationController::class,'subscription']);

Route::get('/login', [SessionController::class,'create']);
Route::post('/login', [SessionController::class,'store']);
Route::get('/logout', [SessionController::class,'destroy']);


Route::get('/resortNewProfile', [AccommodationController::class,'create']);
Route::get('/addAccommodation', [AccommodationController::class,'addAccommodation']);
Route::get('/addPackageDeal', [AccommodationController::class,'addPackageDeal']);
Route::get('/page2', [RegistrationController::class,'page2']);

Route::get('/accountOptions', [AccommodationController::class,'accountOptions']);
Route::get('/displayItems', [AccommodationController::class,'displayItems']);
Route::get('/history', [AccommodationController::class,'history']);
Route::get('/messages', [AccommodationController::class,'messages']);
Route::get('/newProfile', [AccommodationController::class,'newProfile']);
Route::get('/notification', [AccommodationController::class,'notification']);
