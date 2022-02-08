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
    Route::get('categories', 'CategoryController@index')->name('Category.index');
    Route::get('category/create', 'CategoryController@create')->name('Category.create');
    Route::post('category/store', 'CategoryController@store')->name('Category.store');
    Route::get('category/show/{id}', 'CategoryController@show')->name('Category.show');
    Route::get('category/edit/{id}', 'CategoryController@edit')->name('Category.edit');
    Route::post('category/update/{id}', 'CategoryController@update')->name('Category.update');
    Route::delete('category/destroy/{id}', 'CategoryController@destroy')->name('Category.destroy');

                ################### Route Product ##################
    Route::get('products', 'ProductController@index')->name('Product.index');
    Route::get('product/create', 'ProductController@create')->name('Product.create');
    Route::post('product/store', 'ProductController@store')->name('Product.store');
    Route::get('product/show/{id}', 'ProductController@show')->name('Product.show');
    Route::get('product/edit/{id}', 'ProductController@edit')->name('Product.edit');
    Route::post('product/update/{id}', 'ProductController@update')->name('Product.update');
    Route::delete('product/destroy/{id}', 'ProductController@destroy')->name('Product.destroy');
});


