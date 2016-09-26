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

	Route::get('/index', function () {
	    return view('welcome');
	});

	Route::get('/', function(){
		return view('main');
	});
	// Route::get('/', function(){
	// 	return view('index');
	// });
	// Route::get('/homepage','PageController@homepage');
	Route::get('/profile/{id}/settings', 'PageController@settings');

	Route::get('/profile/{id}', 'PageController@profile');


	Route::get('/search-result', 'PageController@search');


	Route::get('/test', 'PageController@user_take');

	Route::auth();

	Route::get('/admin', 'HomeController@index');

	// Route::get('/admin/create', 'HomeController@create');
	// Route::post('/admin/create', 'HomeController@insert');

	Route::get('/admin/{id}','HomeController@user_info');
});


