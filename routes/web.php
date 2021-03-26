<?php

use Illuminate\Support\Facades\Route;

Route::get('command', function() {
    Artisan::call('cache:clear');
    Artisan::call('optimize:clear');
    Artisan::call('config:cache');
    return "Command Successfully";
});

Route::group(['middleware' => 'prevent-back-history', 'namespace' => 'Front', 'as' => 'front.'], function(){
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('menu', 'HomeController@menu')->name('menu');
});


Route::group(['middleware' => 'prevent-back-history', 'namespace' => 'Back', 'as' => 'back.', 'prefix' => 'back'], function(){

    Route::group(['middleware' => ['guest:admin']], function () {
        Route::get('/', 'AuthController@login')->name('login');
        Route::post('signin', 'AuthController@signin')->name('signin');
    });

    Route::group(['middleware' => ['auth:admin']], function () {
        Route::get('logout', 'AuthController@logout')->name('logout');

        Route::get('home', 'HomeController@index')->name('home');
        
        /** users */
            Route::any('users', 'UsersController@index')->name('users');
            Route::get('users/create', 'UsersController@create')->name('users.create');
            Route::post('users/insert', 'UsersController@insert')->name('users.insert');
            Route::get('users/view/{id?}', 'UsersController@view')->name('users.view');
            Route::get('users/edit/{id?}', 'UsersController@edit')->name('users.edit');
            Route::patch('users/update', 'UsersController@update')->name('users.update');
            Route::post('users/change-status', 'UsersController@change_status')->name('users.change.status');
            Route::post('users/delete-image', 'UsersController@delete_image')->name('users.delete.image');
        /** users */


        /** Category */
            Route::any('category', 'CategoryController@index')->name('category');
            Route::get('category/create', 'CategoryController@create')->name('category.create');
            Route::post('category/insert', 'CategoryController@insert')->name('category.insert');
            Route::get('category/view/{id?}', 'CategoryController@view')->name('category.view');
            Route::get('category/edit/{id?}', 'CategoryController@edit')->name('category.edit');
            Route::patch('category/update', 'CategoryController@update')->name('category.update');
            Route::post('category/change-status', 'CategoryController@change_status')->name('category.change.status');
            Route::post('category/delete-image', 'CategoryController@delete_image')->name('category.delete.image');
        /** Category */


        /** Product */
            Route::any('products', 'ProductController@index')->name('products');
            Route::get('products/create', 'ProductController@create')->name('products.create');
            Route::post('products/insert', 'ProductController@insert')->name('products.insert');
            Route::get('products/view/{id?}', 'ProductController@view')->name('products.view');
            Route::get('products/edit/{id?}', 'ProductController@edit')->name('products.edit');
            Route::patch('products/update', 'ProductController@update')->name('products.update');
            Route::post('products/change-status', 'ProductController@change_status')->name('products.change.status');
            Route::post('products/delete-image', 'ProductController@delete_image')->name('products.delete.image');
        /** Product */
    });
});
