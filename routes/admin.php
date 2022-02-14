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
        'prefix' =>'admin', 'namespace' => 'Dashboard' , 'middleware' => 'auth'
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
            Route::get('trashed','CategoryController@trashed')->name('Category.trashed');
            Route::delete('hardDelete/{id}','CategoryController@hardDelete')->name('Category.hardDelete');
            Route::get('restore/{id}','CategoryController@restore')->name('Category.restore');
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
            Route::get('trashed','ImagesController@trashed')->name('Images.trashed');
            Route::delete('hardDelete/{id}','ImagesController@hardDelete')->name('Images.hardDelete');
            Route::get('restore/{id}','ImagesController@restore')->name('Images.restore');

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
            Route::get('trashed','ServiceTypeController@trashed')->name('ServiceType.trashed');
            Route::delete('hardDelete/{id}','ServiceTypeController@hardDelete')->name('ServiceType.hardDelete');
            Route::get('restore/{id}','ServiceTypeController@restore')->name('ServiceType.restore');

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
            Route::get('trashed','ServiceItemController@trashed')->name('ServiceItem.trashed');
            Route::delete('hardDelete/{id}','ServiceItemController@hardDelete')->name('ServiceItem.hardDelete');
            Route::get('restore/{id}','ServiceItemController@restore')->name('ServiceItem.restore');

        });
            ########################## Route Sitting ###############################
        Route::get('sitting' , 'SittingController@index')->name('Sitting.index');
        Route::get('sitting/edit/{id}', 'SittingController@edit')->name('Sitting.edit');
        Route::post('sitting/update/{id}', 'SittingController@update')->name('Sitting.update');

                ################### Route About  ##################
        Route::group(['prefix' => 'about'],function() {
            Route::get('all', 'AboutController@index')->name('About.index');
            Route::get('create', 'AboutController@create')->name('About.create');
            Route::post('store', 'AboutController@store')->name('About.store');
            Route::get('show/{id}', 'AboutController@show')->name('About.show');
            Route::get('edit/{id}', 'AboutController@edit')->name('About.edit');
            Route::post('update/{id}', 'AboutController@update')->name('About.update');
            Route::delete('destroy/{id}', 'AboutController@destroy')->name('About.destroy');
            Route::get('trashed','AboutController@trashed')->name('About.trashed');
            Route::delete('hardDelete/{id}','AboutController@hardDelete')->name('About.hardDelete');
            Route::get('restore/{id}','AboutController@restore')->name('About.restore');

        });

        ################### Route About  ##################
        Route::group(['prefix' => 'back-ground'],function() {
            Route::get('all', 'BackGroundController@index')->name('BackGround.index');
            Route::get('create', 'BackGroundController@create')->name('BackGround.create');
            Route::post('store', 'BackGroundController@store')->name('BackGround.store');
            Route::get('show/{id}', 'BackGroundController@show')->name('BackGround.show');
            Route::get('edit/{id}', 'BackGroundController@edit')->name('BackGround.edit');
            Route::post('update/{id}', 'BackGroundController@update')->name('BackGround.update');
            Route::delete('destroy/{id}', 'BackGroundController@destroy')->name('BackGround.destroy');
            Route::get('trashed','BackGroundController@trashed')->name('BackGround.trashed');
            Route::delete('hardDelete/{id}','BackGroundController@hardDelete')->name('BackGround.hardDelete');
            Route::get('restore/{id}','BackGroundController@restore')->name('BackGround.restore');

        });
});


