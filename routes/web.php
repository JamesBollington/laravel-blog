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

Route::get('posts','PostController@all');

Route::get('postfilter','PostController@show');

Route::get('user','UserController@showuser');

Route::get('posts/create','PostController@create');

Route::post('posts','PostController@store');

Route::get('posts/search','PostController@search');

Route::post('posts/searchresults','PostController@searchresults');

Route::get('posts/post/{id}','PostController@show');

//