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

// Nomination Routes
Route::get('/nominations/index', 'NominationController@index');
Route::get('/nominations/create','NominationController@create');
Route::get('/nominations/{nomination}', 'NominationController@show');
Route::post('/nominations', 'NominationController@store');
Route::post('/nominations/{nomination}', 'NominationController@store');

// Admin - awards
Route::get('/admin/award/{award}/edit','AdminController@editAward');
Route::put('/admin/award/{award}/update','AdminController@updateAward');
Route::delete('/admin/award/destroy/{award}','AdminController@destroyAward');
Route::post('/admin/award/store','AdminController@storeAward');
Route::get('/admin/award','AdminController@award');	//This includes portal and nominations page(tabs)

// Admin - profs
Route::get('/admin/prof','AdminController@prof');
Route::delete('/admin/prof/destroy/{prof}','AdminController@destroyProf');
Route::put('/admin/prof/{prof}/update','AdminController@updateProf');
Route::post('/admin/prof/store','AdminController@storeProf');
Route::get('/admin/prof','AdminController@prof');	

Route::get('/admin/search','AdminController@search');
Route::get('/admin/nominations', 'AdminController@nominations');

// Other pages
Route::get('/about', 'PageController@getAbout');
Route::get('/profile', 'PageController@getContact' );
Route::get('/help', 'PageController@getHelp' );
Route::get('/', 'PageController@getIndex' );
