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
Route::get('change_manager','AdminController@get_change_manager');
Route::get('upload_photo','PageController@show_upload_photo')->name('upload_photo');
Route::get('update_cover_photo','PageController@show_update_photo')->name('update_cover_photo');
Route::post('update_room_info','MessController@room_info_update');
Route::post('mess_info_updated','MessController@mess_info_updated');
Route::get('mess_info_home','PageController@get_mess_info_home');
Route::get('upload_add','PageController@get_upload_add');
Route::get('add_member','MessController@member_list');
Route::post('add_member','MessController@member_list');
Route::post('add_location','AdminController@location_added');
Route::get('add_mess_feature','MessController@add_mess_feature')->name('add_mess_feature');
Route::post('mess_feature_added','MessController@mess_feature_added');
Route::post('mess_feature_deleted','MessController@mess_feature_deleted');

Route::get('update_mess_feature','MessController@update_mess_feature')->name('update_mess_feature');
Route::post('update_mess_feature_added','MessController@update_mess_feature_added');
Route::post('update_mess_feature_deleted','MessController@update_mess_feature_deleted');


Route::get('edit_room_info','MessController@edit_room_info');
Route::get('edit_single_room_info/{room_id}/{total_seat}/{vacant_seat}/{cost}/{add_info}',array('uses' => 'MessController@edit_single_room_info', 'as' => 'edit_single_room_info'));
Route::get('edit_mess','MessController@mess_edit')->name('edit_mess');
Route::get('mess_list','MessController@mess_list');
Route::get('user_list','AdminController@get_user_list');
Route::get('test','MessController@test');
Route::get('search','MessController@simple_search');
Route::get('room_info','PageController@getRoomInfo');
Route::post('update_room_info_table','MessController@room_info_update');
Route::get('mess_profile','MessController@show_mess_profile');
Route::get('about','PageController@getAbout');
Route::get('mess_info','Controller@showdb');
Route::post('mess_created','MessController@insert');
Route::post('uploaded','MessController@upload_img');
Route::post('uploaded_ad','AdminController@upload_ad');
Route::get('add_location','AdminController@get_add_location');
Route::get('show_image','MessController@show_image');
Route::get('admin_home','AdminController@index')->name('admin_home');
Route::get('manage_mess','PageController@get_manage_mess')->name('manage_mess');
Route::get('edit_mess_member','MessController@get_edit_mess_member');
Route::post('edit_mess_member','MessController@get_edit_mess_member');
Route::post('delete_member','AdminController@delete_member');
Route::get('delete_mess', 'MessController@delete_mess');
Route::post('delete_mess_request', 'MessController@delete_mess_request');
Route::get('index_slide','MessController@get_slide');
//Route::get('mess_banner/{filename}',[		'uses' => 'MessController@get_mess_img',		'as' => 'mess.img'	]);
Route::post('room_info_inserted','MessController@insert_room');
Route::get('create_mess','MessController@create');
Route::post('insert_mess_basic','Controller@insert_mess_basic');
Route::get('/','PageController@getIndex')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index');
