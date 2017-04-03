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
// Route::when('*','csrf', ['post','put','delete']);

Route::get('protected',['middleware'=> ['auth','admin'], function() {
	return 'Vous devez être admin ';
}]);

Route::get('/', function () {
	return view('welcome');
});

Route::get('/home',['as'=>'home','uses'=>'PostController@index']);


Route::get('/posts/{slug}',['as'=>'posts.show','uses'=>'PostController@show']);





Route::get('logout',['as'=>'users.logout','uses'=>'UserController@logout']);

Route::get('users/profil',['as'=>'users.profil','uses'=>'UserController@profil']);

Route::get('users/profil/{id}',['as'=>'users.edit','uses'=>'UserController@edit']);

Route::post('users/profil/update/{id}',['as'=>'users.update','uses'=>'UserController@update']);





Route::group(['middelware'=>'admin'],function(){

	Route::get('admin',['as'=>'home.admin','uses'=>'HomeController@admin']);

	Route::get('admin/posts',['as'=>'posts.admin','uses'=>'PostController@admin']);

	Route::get('admin/posts/{id}',['as'=>'posts.edit','uses'=>'PostController@edit']);

	Route::delete('admin/posts/delete/{id}',['as'=>'posts.delete','uses'=>'PostController@delete']);

	Route::post('admin/posts/update/{id}',['as'=>'posts.update','uses'=>'PostController@update']);
	Route::post('admin/posts/publier/{id}',['as'=>'posts.publier','uses'=>'PostController@publier']);

	Route::get('admin/posts/create',['as'=>'posts.create','uses'=>'PostController@create']);

	Route::get('admin/comments',['as'=>'comments.admin','uses'=>'CommentController@admin']);
	Route::delete('admin/comments/delete/{id}',['as'=>'comments.delete','uses'=>'CommentController@delete']);
	Route::get('admin/users',['as'=>'users.admin','uses'=>'UserController@admin']);

	Route::delete('admin/users/{id}',['as'=>'users.delete','uses'=>'UserController@delete']);
	Route::post('admin/permission/{id}',['as'=>'users.permission','uses'=>'UserController@permission']);

});

Route::group(['before'=>'guest'],function(){

	Route::post('check',['as'=>'users.check','uses'=>'UserController@check']);

	

	
	Route::post('store',['as'=>'users.store','uses'=>'UserController@store']);



});


Route::get('register',['as'=>'users.register','uses'=>'UserController@register']);

Route::get('login',['as'=>'users.login','uses'=>'UserController@login']);
Route::group(['before'=>'auth'],function(){

	Route::post('posts/{id}/comments/create',['as'=>'comments.create','uses'=>'CommentController@create']);
});

