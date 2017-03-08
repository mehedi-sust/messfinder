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
Route::get('mess_info','Controller@show_mess_info');
//Route::get('create_mess','Controller@show_mess_info');
//Route::post('insert_mess_basic','Controller@insert_mess_basic');
Route::get('/', function () {
    return view('welcome');
});


