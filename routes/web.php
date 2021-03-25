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
        

        Route::any('users', 'UsersController@index')->name('users');
        Route::get('users/create', 'UsersController@create')->name('users.create');
        Route::post('users/insert', 'UsersController@insert')->name('users.insert');
        Route::post('users/change_status', 'UsersController@change_status')->name('users.change_status');
        Route::get('users/view', 'UsersController@view')->name('users.view');
        Route::get('users/edit/{id?}', 'UsersController@edit')->name('users.edit');
        Route::patch('users/update', 'UsersController@update')->name('users.update');
    });
});
