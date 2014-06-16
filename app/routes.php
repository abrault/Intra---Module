<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'ModuleController@index');

Route::resource('module', 'ModuleController');
	Route::get('delete/{id}', 'ModuleController@delete');
	Route::get('modify/{id}', 'ModuleController@modify');
	Route::get('register/{id}', 'ModuleController@register');

Route::get('login/{user}', 'UserController@login');
Route::get('logout', 'UserController@logout');
Route::get('register', 'UserController@register');

Route::resource('user', 'UserController');
