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
Route::get('show_map','MessController@Show_map');
Route::post('mess_info_updated','MessController@mess_info_updated');
Route::get('mess_info_home','PageController@get_mess_info_home');
Route::get('add_member','MessController@member_list');
Route::post('add_member','MessController@member_list');
Route::get('edit_room_info','MessController@edit_room_info');
Route::get('edit_single_room_info/{room_id}/{total_seat}/{vacant_seat}/{cost}/{add_info}',array('uses' => 'MessController@edit_single_room_info', 'as' => 'edit_single_room_info'));
Route::get('edit_mess','MessController@mess_edit');
Route::get('mess_list','MessController@mess_list');
Route::get('test','PageController@test');
Route::get('search','MessController@simple_search');
Route::get('room_info','PageController@getRoomInfo');
Route::post('update_room_info_table','MessController@room_info_update');
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
