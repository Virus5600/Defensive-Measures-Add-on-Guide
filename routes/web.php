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

Route::get('/', 'PageController@index')->name('home');
Route::get('/installation/{type?}', 'PageController@installation')->name('installation');
Route::get('/privacy-policy/', 'PageController@privacyPolicy')->name('privacy-policy');
Route::get('/privacy-policy/standard', 'PageController@privacyPolicyArial')->name('privacy-policy-standard');
Route::get('/contents/{type?}', 'PageController@contents')->name('contents');

Route::prefix('downloads')->name('downloads.')->group(function() {
	Route::get('/', 'PageController@downloads')->name('index');
	Route::get('/{version}/changelog', 'PageController@changelog')->name('changelog');
});