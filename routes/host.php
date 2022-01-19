<?php

use App\Http\Controllers\Host\SessionController;
use App\Http\Controllers\Host\AccommodationController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'host'], function () {

    Route::get('/login', [SessionController::class, 'create'])
        ->middleware('guest:host')
        ->name('host.login');

    Route::post('/loginstore', [SessionController::class, 'loginstore'])
        ->middleware('guest:host');

    Route::post('/logout', [SessionController::class, 'destroy'])
        ->middleware('auth:host')
        ->name('host.logout');

    Route::group(['middleware' => 'auth:host'], function () {
        Route::get('/newProfile', [AccommodationController::class,'newProfile']);
    });
});