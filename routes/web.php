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
    Route::get('gallery', 'HomeController@gallery')->name('gallery');
    Route::get('about', 'HomeController@about')->name('about');
    Route::get('contact', 'HomeController@contact')->name('contact');
    Route::get('testimonial', 'HomeController@testimonial')->name('testimonial');
    Route::get('faq', 'HomeController@faq')->name('faq');
    Route::get('terms', 'HomeController@terms')->name('terms');
    Route::get('privacy', 'HomeController@privacy')->name('privacy');
    Route::get('product-detail', 'HomeController@product_detail')->name('product-detail');
    Route::get('error', 'HomeController@error')->name('error');

    Route::get('cart', 'HomeController@cart')->name('cart');
    Route::get('shop', 'HomeController@shop')->name('shop');
    Route::get('checkout', 'HomeController@checkout')->name('checkout');

    Route::get('login', 'HomeController@login')->name('login');
    Route::get('signup', 'HomeController@signup')->name('signup');
    Route::get('forgot-password', 'HomeController@forgot_password')->name('forgot-password');
});

Route::get('/admin', function(){ return redirect()->route('back.login'); });

Route::group(['middleware' => 'prevent-back-history', 'namespace' => 'Back', 'as' => 'back.', 'prefix' => 'back'], function(){
    Route::group(['middleware' => ['guest:admin']], function () {
        Route::get('/login', 'AuthController@login')->name('login');
        Route::post('signin', 'AuthController@signin')->name('signin');
    });

    Route::group(['middleware' => ['auth:admin']], function () {
        Route::get('logout', 'AuthController@logout')->name('logout');

        Route::get('home', 'HomeController@index')->name('home');

        /** Users */
            Route::any('users', 'UsersController@index')->name('users');
            Route::get('users/create', 'UsersController@create')->name('users.create');
            Route::post('users/insert', 'UsersController@insert')->name('users.insert');
            Route::get('users/view/{id?}', 'UsersController@view')->name('users.view');
            Route::get('users/edit/{id?}', 'UsersController@edit')->name('users.edit');
            Route::patch('users/update', 'UsersController@update')->name('users.update');
            Route::post('users/change-status', 'UsersController@change_status')->name('users.change.status');
            Route::post('users/delete-image', 'UsersController@delete_image')->name('users.delete.image');
        /** Users */

        /** Categories */
            Route::any('categories', 'CategoriesController@index')->name('categories');
            Route::get('categories/create', 'CategoriesController@create')->name('categories.create');
            Route::post('categories/insert', 'CategoriesController@insert')->name('categories.insert');
            Route::get('categories/view/{id?}', 'CategoriesController@view')->name('categories.view');
            Route::get('categories/edit/{id?}', 'CategoriesController@edit')->name('categories.edit');
            Route::patch('categories/update', 'CategoriesController@update')->name('categories.update');
            Route::post('categories/change-status', 'CategoriesController@change_status')->name('categories.change.status');
        /** Categories */

        /** Products */
            Route::any('products', 'ProductsController@index')->name('products');
            Route::get('products/create', 'ProductsController@create')->name('products.create');
            Route::post('products/insert', 'ProductsController@insert')->name('products.insert');
            Route::get('products/view/{id?}', 'ProductsController@view')->name('products.view');
            Route::get('products/edit/{id?}', 'ProductsController@edit')->name('products.edit');
            Route::patch('products/update', 'ProductsController@update')->name('products.update');
            Route::post('products/change-status', 'ProductsController@change_status')->name('products.change.status');
        /** Products */

        /** Settings */
            Route::any('settings', 'settingsController@index')->name('settings');
            Route::get('settings/view/{id?}', 'settingsController@view')->name('settings.view');
            Route::get('settings/edit/{id?}', 'settingsController@edit')->name('settings.edit');
            Route::patch('settings/update', 'settingsController@update')->name('settings.update');
            Route::post('settings/change-status', 'settingsController@change_status')->name('settings.change.status');
        /** Settings */

        /** Temp-Settings */
            Route::get('temp-settings', 'TempSettingsController@index')->name('temp.settings');
            Route::post('temp-settings/update', 'TempSettingsController@update')->name('temp.settings.update');
        /** Temp-Settings */
    });
});
