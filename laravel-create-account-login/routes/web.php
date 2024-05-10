<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;


Route::group(['prefix' => '/', 'as' => 'home.'], function () {

    Route::get('/', [HomeController::class, 'home'])
        ->name('home');

    Route::get('/login', [HomeController::class, 'login'])
        ->name('login');

    Route::get('/create_account', [HomeController::class, 'create_account'])
        ->name('create_account');
});
