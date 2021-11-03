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

Route::get('/', 'PageController@index')->name('home');
Route::get('/installation/{type?}', 'PageController@installation')->name('installation');
Route::get('/privacy-policy/', 'PageController@privacyPolicy')->name('privacy-policy');
Route::get('/privacy-policy/standard', 'PageController@privacyPolicyArial')->name('privacy-policy-standard');

Route::get('/contents/{type?}', 'PageController@contents')->name('contents');
Route::get('/items/{item}', 'PageController@items')->name('items');

Route::group(['prefix' => 'downloads'], function() {
	Route::get('/', 'PageController@downloads')->name('downloads.index');
	Route::get('/{version}/changelog', 'PageController@changelog')->name('downloads.show');
});

//////////////////
// AUTH RELATED //
//////////////////
Route::get('/login', 'UserController@redirectLogin')->name('login');
Route::post('/auth', 'UserController@authenticate')->name('auth');
Route::get('/logout', 'UserController@logout')->name('logout');

///////////
// ADMIN //
///////////
Route::group(['prefix' => 'admin', 'name' => 'admin.'], function() {
	Route::get('/login', 'UserController@login')->name('login');

	Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
});