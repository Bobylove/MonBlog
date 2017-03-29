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

Route::get('/', function () {
	return view('welcome');
});

Route::get('/home',['as'=>'home','uses'=>'PostController@index']);

Route::get('/posts/{slug}',['as'=>'posts.show','uses'=>'PostController@show']);





Route::get('logout',['as'=>'users.logout','uses'=>'UserController@logout']);



Route::group(['before'=>'auth'],function(){

	Route::get('admin',['as'=>'home.admin','uses'=>'HomeController@admin']);

});

Route::group(['before'=>'guest'],function(){

	Route::post('check',['as'=>'users.check','uses'=>'UserController@check']);

	Route::get('register',['as'=>'users.register','uses'=>'UserController@register']);

	Route::get('login',['as'=>'users.login','uses'=>'UserController@login']);

	
	Route::post('store',['as'=>'users.store','uses'=>'UserController@store']);

});

