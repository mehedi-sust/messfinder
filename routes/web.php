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
Route::post('update_room_info','MessController@room_info_update');
Route::post('mess_info_updated','MessController@mess_info_updated');
Route::get('add_member','MessController@member_list');
Route::post('add_member','MessController@member_list');
Route::get('edit_room_info','MessController@edit_room_info');
Route::get('edit_mess','MessController@mess_edit');
Route::get('mess_list','MessController@mess_list');
Route::post('test','MessController@test');
Route::get('search','MessController@simple_search');
Route::get('room_info','PageController@getRoomInfo');
Route::get('mess_profile','MessController@show_mess_profile');
Route::get('about','PageController@getAbout');
Route::get('mess_info','Controller@showdb');
Route::post('mess_created','MessController@insert');
Route::post('room_info_inserted','MessController@insert_room');
Route::get('create_mess','MessController@create');
Route::post('insert_mess_basic','Controller@insert_mess_basic');
Route::get('/','PageController@getIndex');



Auth::routes();

Route::get('/home', 'HomeController@index');
