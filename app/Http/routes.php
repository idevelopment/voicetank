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

    // User routes.
    Route::get('/users', 'UserController@index')->name('users.index');
    Route::get('/users/register', 'UserController@registerView')->name('name.register');
    Route::get('/users/edit/{id}', 'UserController@ProfileEditView')->name('users.edit');
    Route::post('/users/edit/{id}', 'UserController@ProfileEditPost')->name('users.update');
    Route::get('/users/block/{id}', 'UserController@block')->name('users.block');
    Route::get('/users/unblock/{id}', 'UserController@unblock')->name('users.unblock');
    Route::get('/users/delete/{id}', 'UserController@userDestroy')->name('users.destroy');

    // Profile routes.
    Route::get('/account', 'ProfileController@profile');
    Route::post('/account/update', 'ProfileController@UpdateAccount');

    // Settings
    Route::get('/settings', 'SettingsController@index');

    // FAQ routes.
    Route::get('/faq', 'FaqController@index')->name('faq.index');
    Route::get('/faq/delete/{id}', 'FaqController@destroy')->name('faq.destroy');
    Route::get('/faq/edit/{id}', 'FaqController@edit')->name('faq.edit');
    Route::post('/faq/edit/{id}', 'FaqController@update')->name('faq.update');
    Route::get('/faq/create', 'FaqController@create')->name('faq.create');
    Route::post('/faq/create', 'FaqController@store')->name('faq.store');
});
