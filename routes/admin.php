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
    Route::get('categories', 'CategoryCotroller@index')->name('Category.index');
    Route::get('category/create', 'CategoryCotroller@create')->name('Category.create');
    Route::post('category/store', 'CategoryCotroller@store')->name('Category.store');
    Route::get('category/show/{id}', 'CategoryCotroller@show')->name('Category.show');
    Route::get('category/edit/{id}', 'CategoryCotroller@edit')->name('Category.edit');
    Route::post('category/update/{id}', 'CategoryCotroller@update')->name('Category.update');
    Route::post('category/destroy/{id}', 'CategoryCotroller@destroy')->name('Category.destroy');
});


