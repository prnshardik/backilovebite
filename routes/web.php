<?php

use Illuminate\Support\Facades\Route;

Route::get('command', function() {
    Artisan::call('cache:clear');
    Artisan::call('optimize:clear');
    Artisan::call('config:cache');
    return "Command Successfully";
});

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'prevent-back-history', 'namespace' => 'Back', 'as' => 'back.', 'prefix' => 'back'], function(){
    Route::group(['middleware' => ['guest:admin']], function () {
        Route::get('/', 'AuthController@login')->name('login');
        Route::post('signin', 'AuthController@signin')->name('signin');
    });

    Route::group(['middleware' => ['auth:admin']], function () {
        Route::get('logout', 'AuthController@logout')->name('logout');

        Route::get('home', 'HomeController@index')->name('home');
    });
});
