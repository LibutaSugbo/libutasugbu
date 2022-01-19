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
use App\Http\Controllers\Host\HostController;
use App\Http\Controllers\Host\SessionController;
use App\Http\Controllers\Host\AccommodationController;
//require __DIR__ . '\host.php';
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [HostController::class,'home']);
Route::get('/su_host_traveler', function () {
    return view('su_host_traveler');
});
//host
/*
Route::prefix('host')->group(function(){
    Route::middleware(['guest','PreventBackHistory'])->group(function(){
       
    });

    Route::middleware(['auth','PreventBackHistory'])->group(function() {
        
    });
});
*/
Route::get('/signup', [HostController::class,'create'])->middleware('guest');
Route::get('/su-resort', [HostController::class,'createresort'])->middleware('guest');
Route::post('/storeSu_resort', [HostController::class,'storeresort'])->middleware('guest',);
Route::get('/su-bnb', [HostController::class,'createbnb'])->middleware('guest');
Route::post('/storeSu_bnb', [HostController::class,'storebnb'])->middleware('guest');
Route::get('/su-rentalvehicles', [HostController::class,'createrentalv'])->middleware('guest');
Route::post('/storeSu_rentalvehicles', [HostController::class,'storerentalv'])->middleware('guest');
Route::get('/su-restoncafe', [HostController::class,'createresto'])->middleware('guest');
Route::post('/storeSu_restoncafe', [HostController::class,'storeresto'])->middleware('guest');
Route::get('/su-tourspot', [HostController::class,'createtour'])->middleware('guest');
Route::post('/storeSu_tourspot', [HostController::class,'storetour'])->middleware('guest');


Route::get('/verification', [HostController::class,'verification']);
Route::get('/subscription', [HostController::class,'subscription']);

Route::get('/login', [SessionController::class,'create'])->middleware('guest');
Route::post('/loginstore', [SessionController::class,'loginstore']);
Route::get('/logout', [SessionController::class,'destroy'])->middleware('auth');
Route::middleware(['auth'])->group(function() {
    Route::view('/newProfile','host.newProfile')->name('newProfile');
});

Route::get('/resortNewProfile', [AccommodationController::class,'create']);
Route::get('/addAccommodation', [AccommodationController::class,'addAccommodation']);
Route::get('/addPackageDeal', [AccommodationController::class,'addPackageDeal']);
Route::get('/page2', [RegistrationController::class,'page2']);

Route::get('/accountOptions', [AccommodationController::class,'accountOptions']);
Route::get('/displayItems', [AccommodationController::class,'displayItems']);
Route::get('/history', [AccommodationController::class,'history']);
Route::get('/messages', [AccommodationController::class,'messages']);
Route::get('/newProfile', [AccommodationController::class,'newProfile'])->middleware('auth');
Route::get('/notification', [AccommodationController::class,'notification']);
