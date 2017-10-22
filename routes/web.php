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
Route::get('/', 'UsersController@index');
Route::POST('/', 'UsersController@userhome');
Route::POST('/userhome', 'UsersController@userhome');
Route::get('/registration', 'UsersController@create');
Route::POST('/registration', 'UsersController@store');
Route::get('/test',function (){
    return view('test');
});