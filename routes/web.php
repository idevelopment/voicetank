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
Route::post('/users/departments/save', 'DepartmentsController@save')->name('departments.save');

Route::get('/projects', 'ProjectsController@index')->name('projects.index');
Route::get('/projects/details', 'ProjectsController@details')->name('projects.details');
Route::get('/projects/create', 'ProjectsController@register')->name('projects.register');
Route::post('/projects/save', 'ProjectsController@save')->name('projects.save');


Route::get('/users/list', 'UsersController@index')->name('users.index');
Route::get('/users/create', 'UsersController@register')->name('users.register');
Route::post('/users/save', 'UsersController@save')->name('users.save');
