<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function(){
	Route::get('/', function(){
		return view('welcome');
	});

	Route::get('/', 'PageController@homepage');	
	// Route::get('/', function(){
	// 	return view('index');
	// });
	// Route::get('/homepage','PageController@homepage');
	Route::get('/profile/{id}/settings', 'PageController@settings');
	Route::patch('/profile/{id}','PageController@profile_update');
	Route::get('/profile/{id}', 'PageController@profile');
	Route::post('profile/upload-a-picture/{id}', 'PageController@upload_picture');
	Route::get('book/{id}', 'PageController@show_book');
	Route::post('/search-result', 'PageController@search');
	// Route::get('/admin/user/{id}', 'HomeController@delete');

	Route::get('/test', 'PageController@user_take');

	Route::auth();

	Route::get('/admin', 'HomeController@index');

	// Route::get('/admin/create', 'HomeController@create');
	// Route::post('/admin/create', 'HomeController@insert');
	Route::get('/admin/user/{id}/update', 'HomeController@update');

	Route::patch('/admin/{id}', 'HomeController@edit');
	Route::get('/admin/delete/{id}', 'HomeController@delete');
	Route::get('/admin/user/{id}','HomeController@user_info');

	Route::get('admin/actions', 'HomeController@actions');

	Route::get('admin/books', 'HomeController@book');
	Route::get('admin/books/create-new-book', 'HomeController@book_create');
	Route::get('admin/books/actions', 'HomeController@book_actions');
	Route::get('admin/books/delete/{id}', 'HomeController@book_delete');
	Route::post('admin/books/create-new-book', 'HomeController@create_new_book');
	Route::get('admin/books/update/{id}', 'HomeController@update_book');
	Route::post('admin/books/update/{id}', 'HomeController@edit_book');
});

