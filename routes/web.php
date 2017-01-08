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


Route::get('/nominations/index', 'NominationsController@index');
Route::get('/nominations/create','NominationsController@create');
Route::get('/nominations/{nomination}', 'NominationsController@show');

Route::post('/nominations', "NominationsController@store");
Route::post('/nominations/{nomination}', "NominationsController@store");

Route::get('/admin/report','AdminController@report');	//This includes portal and nominations page(tabs)
Route::get('/admin/search','AdminController@search');
Route::get('/admin/portal', 'AdminController@portal');	//How to include this in the tab on one page
Route::get('/admin/nominations', 'AdminController@nominations');	//How to include this in the tab on one page

Route::get('/about', 'PageController@getAbout');
Route::get('/profile', 'PageController@getContact' );
Route::get('/', 'PageController@getIndex' );