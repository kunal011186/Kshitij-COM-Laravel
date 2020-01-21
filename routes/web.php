<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'HomeController@welcome');
Route::get('/test-post', 'HomeController@testPost');

Auth::routes();
/*
Route::get('/logout', function()
{
	Auth::logout();
});
*/
Route::get('/previous/{id}', 'PostController@previous')->name('previous');

/*Route::group(['middleware' => 'auth','prefix' => 'admin'], function () {
   /* Route::get('/', function () {
    	return view('admin.index');
	})->name('admin-home'); 
	
	Route::get('/create-post', 'PostController@create')->name('create-post');
	Route::post('/save-post', 'PostController@store')->name('save-post');
	Route::get('/all-posts', 'PostController@index')->name('admin-all-posts');
	Route::get('/delete-post/{id}', 'PostController@destroy')->name('delete-post');
	Route::get('/edit-post/{id}', 'PostController@edit')->name('edit-post');
	
	Route::get('/media', function () {
		return view('admin.media');
	})->name('media');
	Route::post('/file-upload/{folder}/{keepFileName}', 'UtilityDesk@saveFile')->name('file-upload');

	Route::get('/categories', 'CategoryController@index')->name('admin-categories');
});*/

Route::get('/{slug}', 'PostController@show')->name('show-post');
Route::get('/category/{slug}', 'CategoryController@showPosts')->name('show-category');
