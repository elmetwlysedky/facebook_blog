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
        'prefix' =>'home' , 'namespace' => 'Site'
    ], function() {

        Route::get('/', 'HomeController@index')->name('endUser.home');
        Route::get('category', 'HomeController@category')->name('endUser.category');
        Route::get('product/{id}', 'HomeController@Images')->name('endUser.Images');

        ######################## Route contact ###############################
        Route::get('contact/create', 'ContactController@create')->name('endUser.contact');
        Route::get('contact/store', 'ContactController@store')->name('contact.store');
        Route::get('contacts', 'ContactController@index')->name('contact.index');
        Route::get('contact/show', 'ContactController@show')->name('contact.show');
});

Route::get('lang/home', 'LangController@index');
Route::get('lang/change', 'LangController@change')->name('changeLang');






Route::get('/', function () {
    return view('welcome');
});
