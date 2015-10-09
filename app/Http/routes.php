<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

# Auth
Route::get('login', ['uses' => 'Auth\AuthController@getLogin']);
Route::get('register', ['uses' => 'Auth\AuthController@getRegister']);
Route::get('logout', ['uses' => 'Auth\AuthController@getLogout']);
Route::get('password_reset', ['uses' => 'Auth\PasswordController@getEmail']);
Route::get('password_reset/{token}', ['uses' => 'Auth\PasswordController@getReset']);
Route::post('login', ['uses' => 'Auth\AuthController@postLogin']);
Route::post('register', ['uses' => 'Auth\AuthController@postRegister']);
Route::post('password_reset', ['uses' => 'Auth\PasswordController@postEmail']);
Route::post('password_reset/{token}', ['uses' => 'Auth\PasswordController@postReset']);


# Home
Route::get('/', ['uses' => 'HomeController@index', 'middleware' => 'auth']);