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

Route::get('/',['as'=>'home.index','uses'=>'HomeController@home']);
Route::get('/products',['as'=>'products.index','uses'=>'HomeController@products']);
Route::get('/single',['as'=>'single.index','uses'=>'HomeController@single']);
Route::get('/login',['as'=>'login.index','uses'=>'HomeController@login']);
Route::get('/about',['as'=>'about.index','uses'=>'HomeController@about']);

Route::group(['prefix' => 'admin'], function(){
	Route::get('/', ['as'=>'admin_home.index','uses'=>'HomeController@admin_home']);
	
});