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
Route::resource('messes','MessController');
Route::get('room_info','PageController@getRoomInfo');
Route::get('mess_profile','Controller@show_mess_profile');
Route::get('about','PageController@getAbout');
Route::get('mess_info','Controller@showdb');
Route::post('mess_created','MessController@insert');
Route::get('create_mess','MessController@create');
Route::post('insert_mess_basic','Controller@insert_mess_basic');
Route::get('/','PageController@getIndex');


