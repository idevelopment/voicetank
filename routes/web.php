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

Route::get('/users/departments', 'DepartmentsController@index')->name('departments.index');
Route::get('/users/departments/create', 'DepartmentsController@register')->name('departments.register');
Route::post('/users/departments/save', 'DepartmentsController@save')->name('departments.save');

Route::get('/projects', 'ProjectsController@index')->name('projects.index');
Route::get('/projects/details', 'ProjectsController@details')->name('projects.details');
Route::get('/projects/create', 'ProjectsController@register')->name('projects.register');
Route::post('/projects/save', 'ProjectsController@save')->name('projects.save');

Route::get('/profile', 'AccountController@index')->name('profile');
Route::post('/profile/update/info', 'AccountController@updateInfo')->name('profile.info');
Route::post('/profile/update/security', 'AccountController@updatePassword')->name('profile.security');
Route::post('/profile/update/contact', 'AccountController@updateContact')->name('profile.contact');

Route::get('/feedback/labels', 'LabelController@index')->name('labels.index');
Route::get('/feedback/labels/{id}', 'LabelController@show')->name('labels.show');
Route::get('/feedback/labels/destroy/{id}', 'LabelController@destroy')->name('labels.destroy');
Route::post('/feedback/labels/update/{id}', 'LabelController@update')->name('labels.update');
Route::post('/feedback/labels', 'LabelController@store')->name('labels.store');


Route::get('/users/list', 'UsersController@index')->name('users.index');
Route::get('/users/create', 'UsersController@register')->name('users.register');
Route::post('/users/save', 'UsersController@save')->name('users.save');
