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


Route::group(
    [
        'prefix' =>'home' , 'namespace' => 'Site'
    ], function() {

    Route::get('/', 'HomeController@index')->name('endUser.home');
    Route::get('category', 'HomeController@category')->name('endUser.category');
    Route::get('image/{id}', 'HomeController@image')->name('endUser.Images');
    Route::get('about','HomeController@about')->name('Site.about');
    Route::get('who-are-we','HomeController@who_are_we')->name('Site.who_are_we');

    ######################## Route contact ###############################
    Route::get('contact/create', 'ContactController@create')->name('endUser.contact');
    Route::get('contact/store', 'ContactController@store')->name('contact.store');
    Route::get('contacts', 'ContactController@index')->name('contact.index');
    Route::get('contact/show', 'ContactController@show')->name('contact.show');

});

Route::get('lang/home', 'LangController@index');
Route::get('lang/change', 'LangController@change')->name('changeLang');

require __DIR__.'/auth.php';
