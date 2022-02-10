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

Route::group(
    [
        'prefix' =>'admin', 'namespace' => 'Dashboard'
    ], function() {

    Route::get('home', 'HomeController@index')->name('Dashboard.home');
                 ################### Route Category ##################
        Route::group(['prefix' => 'category'],function(){
            Route::get('all', 'CategoryController@index')->name('Category.index');
            Route::get('create', 'CategoryController@create')->name('Category.create');
            Route::post('store', 'CategoryController@store')->name('Category.store');
            Route::get('show/{id}', 'CategoryController@show')->name('Category.show');
            Route::get('edit/{id}', 'CategoryController@edit')->name('Category.edit');
            Route::post('update/{id}', 'CategoryController@update')->name('Category.update');
            Route::delete('destroy/{id}', 'CategoryController@destroy')->name('Category.destroy');
        });
                ################### Route Images ##################
        Route::group(['prefix' => 'images'],function(){
            Route::get('all', 'ImagesController@index')->name('Images.index');
            Route::get('create', 'ImagesController@create')->name('Images.create');
            Route::post('store', 'ImagesController@store')->name('Images.store');
            Route::get('show/{id}', 'ImagesController@show')->name('Images.show');
            Route::get('edit/{id}', 'ImagesController@edit')->name('Images.edit');
            Route::post('update/{id}', 'ImagesController@update')->name('Images.update');
            Route::delete('destroy/{id}', 'ImagesController@destroy')->name('Images.destroy');
        });
                 ################### Route Service Type ##################
        Route::group(['prefix' => 'Service-type'],function() {
            Route::get('all', 'ServiceTypeController@index')->name('ServiceType.index');
            Route::get('create', 'ServiceTypeController@create')->name('ServiceType.create');
            Route::post('store', 'ServiceTypeController@store')->name('ServiceType.store');
            Route::get('show/{id}', 'ServiceTypeController@show')->name('ServiceType.show');
            Route::get('edit/{id}', 'ServiceTypeController@edit')->name('ServiceType.edit');
            Route::post('update/{id}', 'ServiceTypeController@update')->name('ServiceType.update');
            Route::delete('destroy/{id}', 'ServiceTypeController@destroy')->name('ServiceType.destroy');

        });

                 ################### Route Service Item ##################
        Route::group(['prefix' => 'Service-item'],function() {
            Route::get('all', 'ServiceItemController@index')->name('ServiceItem.index');
            Route::get('create', 'ServiceItemController@create')->name('ServiceItem.create');
            Route::post('store', 'ServiceItemController@store')->name('ServiceItem.store');
            Route::get('show/{id}', 'ServiceItemController@show')->name('ServiceItem.show');
            Route::get('edit/{id}', 'ServiceItemController@edit')->name('ServiceItem.edit');
            Route::post('update/{id}', 'ServiceItemController@update')->name('ServiceItem.update');
            Route::delete('destroy/{id}', 'ServiceItemController@destroy')->name('ServiceItem.destroy');

        });
});


