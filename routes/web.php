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

Route::get('/', 'MainController@index');

Auth::routes();

Route::group(['prefix' => 'home'], function () {
    Route::get('/', 'HomeController@index');
    Route::get('/previous', 'HomeController@PreviousPhoto');
    Route::get('/next', 'HomeController@NextPhoto');
});

Route::group(['middleware' => ['web', 'auth']], function () {
    Route::resource('/photo', 'PhotoController');

    Route::group(['prefix' => 'photo'], function () {

    });

    Route::resource('/page', 'PageController');
});

Route::group(['middleware' => ['web']], function () {
    Route::get('p/{id}', 'MainController@ViewPage');
    Route::post('form/1', 'FormController@PageOneContactForm');
});

