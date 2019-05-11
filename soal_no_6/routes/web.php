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

Route::resource('/', 'SoalController');
Route::post('create_user','SoalController@store');
Route::get('/user/hapus/{id}', 'SoalController@destroy');
Route::post('/user/update/{id}', 'SoalController@update');