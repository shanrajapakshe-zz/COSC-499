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
Route::get('/nominations/{post}', 'NominationsController@show');

Route::post('/nominations', "NominationsController@store");
Route::post('/nominations/{nomination}', "NominationsController@store");


Route::get('/about', 'PageController@getAbout');
Route::get('/profile', 'PageController@getContact' );
Route::get('/', 'PageController@getIndex' );