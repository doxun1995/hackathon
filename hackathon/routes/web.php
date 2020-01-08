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

Route::get('/', 'PostController@index')->name('posts.index');

Route::group(['middleware' => 'auth'], function() {

  Route::get('/posts/new', 'PostController@new')->name('posts.new');
  Route::post('/posts/create', 'PostController@create')->name('posts.create');
  Route::post('/posts/insert', 'PostController@insert')->name('posts.insert');

  Route::get('/posts/edit', 'PostController@edit')->name('posts.edit');
  Route::post('/posts/update', 'PostController@update')->name('posts.update');
  Route::post('/posts/update_post', 'PostController@update_post')->name('posts.update_post');

  Route::get('/posts/delete', 'PostController@delete')->name('posts.delete');

  Route::get('/users', 'UserController@index')->name('users.index');
});

Auth::routes(['verify' => true]);

