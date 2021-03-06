<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','InfoController@index');


Auth::routes();

Route::get('/user', 'UserController@index')->middleware('auth');
Route::get('/admin', 'AdminController@index')->middleware('auth');