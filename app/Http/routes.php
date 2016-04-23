<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    // Contact routes
    Route::get('/contact', 'ContactController@view');
    Route::post('/contact', 'ContactController@send');

    Route::get('/home', 'HomeController@index');

    // Settings
    Route::get('/settings', 'SettingsController@index');

    // FAQ routes.
    Route::get('/faq', 'FaqController@index')->name('faq.index');
});
