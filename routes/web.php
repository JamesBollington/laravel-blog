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
/*
Route::get('users',function(){
    $users= \App\User::all();
    return View::make('users')->with('users',$users);
});
*/
Route::get('users','UserController@index');

Route::get('users/{author}','UserController@author');

Route::get('posts','PostController@all');

Route::get('postfilter','PostController@show');

Route::get('user','UserController@showuser');

Route::get('posts/create','PostController@create');

Route::post('comment','CommentController@store');

Route::post('posts','PostController@store');

Route::get('posts/search','PostController@search');

/*Route::post('posts/searchresults','PostController@searchresults');*/

Route::get('posts/post/{id}','PostController@show');

Route::get('posts/user/{user}','PostController@user');

Route::post('posts/post/{id}/editconfirm','PostController@editconfirm');

Route::get('posts/post/{id}/edit','PostController@edit');

//