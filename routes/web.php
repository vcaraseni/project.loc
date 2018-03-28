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

//Route::get('/', 'PagesController@index');


Route::get('/', 'AnnouncesController@getAll')->name('index');
Route::get('/announce/{id}', 'AnnouncesController@getAnnounceById')->name('get-announce');
Route::get('/create', 'PagesController@create')->name('create-announce');
Route::post('/create', 'AnnouncesController@createAnnounce')->name('post-create-announce');
