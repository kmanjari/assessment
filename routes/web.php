<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/', 'HomeController@listHotels');

Route::get('hotel/{id}', 'HotelController@show');

Route::get('hotel/{id}/comment', 'HotelController@showComment');

Route::post('hotel/{id}/comment', 'HotelController@postComment');

Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function()
{
    Route::get('/', 'AdminController@create');

    Route::post('/', 'AdminController@store');
});