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

Route::get('/nominations/index', 'NominationController@index');
Route::get('/nominations/create','NominationController@create');
Route::get('/nominations/{nomination}', 'NominationController@show');

Route::post('/nominations', 'NominationController@store');
Route::post('/nominations/{nomination}', 'NominationController@store');

Route::post('/admin/report/award/store','AdminController@storeAward');
Route::get('/admin/report/award/{award}/edit','AdminController@editAward');
Route::delete('/admin/report/award/destroy/{award}','AdminController@destroyAward');

Route::get('/admin/report','AdminController@report');	//This includes portal and nominations page(tabs)
Route::get('/admin/search','AdminController@search');
Route::get('/admin/nominations', 'AdminController@nominations');	//How to include this in the tab on one page

Route::get('/about', 'PageController@getAbout');
Route::get('/profile', 'PageController@getContact' );
Route::get('/help', 'PageController@getHelp' );
Route::get('/', 'PageController@getIndex' );
