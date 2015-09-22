<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
| POST, GET, PUT, DELETE
*/

Route::get('/','FrontController@index');
Route::get('contacto','FrontController@contacto');
Route::get('reviews','FrontController@reviews');
Route::get('admin','FrontController@admin');

Route::resource('usuario','UsuarioController');
