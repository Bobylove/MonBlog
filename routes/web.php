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

Route::get('login',['as'=>'users.login','uses'=>'UserController@login']);

Route::post('check',['as'=>'users.check','uses'=>'UserController@check']);
