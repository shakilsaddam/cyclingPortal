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
Route::POST('/hl1', 'FetchUserInfoController@searchResult');
//Route::POST('/userhome', 'UsersController@userhome');
Route::get('/userhome','FetchUserInfoController@fetchBikeInfo');
//Route::get('/user/home','UsersController@home');
Route::get('/registration', 'UsersController@create');
Route::POST('/registration', 'UsersController@store');
Route::get('/userlogin','UsersController@login');
Route::get('/logout', 'UsersController@logout');

Route::get('/test',function (){
    return view('layout.footer');
});
Route::get('/test1',function (){
    return view('user.userhome');
});
Route::get('/test2', 'FetchUserInfoController@fetchBikeInfo');
Route::get('/addbike', 'FetchUserInfoController@addNewBike');
Route::POST('/addbike', 'FetchUserInfoController@addBikeStore');
Route::get('/search', 'FetchUserInfoController@search');
Route::get('/search/{chasses_no}', 'FetchUserInfoController@APIsearchResult');
Route::POST('/search', 'FetchUserInfoController@searchResult');

Route::get('update/bikestatus/{id}', 'UpdateUsersData@updateBikeStatus');

Route::POST('updatebike','UpdateUsersData@updateBikeStatus');
Route::get('updatebike',function (){
    return redirect('userhome');
});

Route::POST('viewdetails','UpdateUsersData@viewDetails');

//Buy or Sale Routes
Route::get('buyorsale/home','BuyOrSaleController@index');
Route::get('buyorsale/viewdetail','BuyOrSaleController@detail');

Route::get('/modeldata', function (){
   $tests = \App\Up_for_sale::all();
   return view('buyorsale.tests', compact('tests'));
});