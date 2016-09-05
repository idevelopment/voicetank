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

// Github - Social authencation.
Route::get('auth/github', 'Auth\GithubController@redirectToProvider');
Route::get('auth/github/callback', 'Auth\GithubController@handleProviderCallback');

// Facebook - Social Authencation.
Route::get('auth/facebook', 'Auth\FacebookController@redirectToProvider');
Route::get('auth/facebook/callback', 'Auth\FacebookController@handleProviderCallback');

Route::get('/home', 'HomeController@index');

Route::get('/users/departments', 'DepartmentsController@index')->name('departments.index');
Route::post('/users/departments/save', 'DepartmentsController@save')->name('departments.save');
Route::get('/users/departments/{id}', 'DepartmentsController@show')->name('departments.show');
Route::get('/users/departments/destroy/{id}', 'DepartmentsController@destroy')->name('departments.destroy');


Route::get('/users/teams', 'TeamsController@index')->name('teams.index');
Route::get('/users/teams/create', 'TeamsController@register')->name('teams.register');
Route::post('/users/teams/save', 'TeamsController@index')->name('teams.save');


Route::get('/projects', 'ProjectsController@index')->name('projects.index');
Route::get('/projects/details', 'ProjectsController@details')->name('projects.details');
Route::get('/projects/create', 'ProjectsController@register')->name('projects.register');
Route::post('/projects/save', 'ProjectsController@save')->name('projects.save');

Route::get('/profile', 'AccountController@index')->name('profile');
Route::post('/profile/update/info', 'AccountController@updateInfo')->name('profile.info');
Route::post('/profile/update/security', 'AccountController@updatePassword')->name('profile.security');
Route::post('/profile/update/contact', 'AccountController@updateContact')->name('profile.contact');

Route::get('/feedback/labels', 'LabelController@index')->name('labels.index');
Route::get('/feedback/labels/destroy/{id}', 'LabelController@destroy')->name('labels.destroy');
Route::post('/feedback/labels/update/{id}', 'LabelController@update')->name('labels.update');
Route::post('/feedback/labels', 'LabelController@store')->name('labels.store');

Route::get('/users/list', 'UsersController@index')->name('users.index');
Route::get('/users/{id}', 'UsersController@show')->name('users.show');
Route::get('/users/create', 'UsersController@register')->name('users.register');
Route::get('/users/destroy/{id}', 'UsersController@destroy')->name('users.destroy');
Route::post('/users/save', 'UsersController@save')->name('users.save');
