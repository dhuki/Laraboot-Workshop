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

Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');

Auth::routes();

Route::get('/activity', 'ListActivityController@index')->name('index');
Route::get('/activity/create', 'ListActivityController@create')->name('create');
Route::post('/activity/store', 'ListActivityController@store')->name('store');
Route::get('/activity/edit/{id}', 'ListActivityController@edit')->name('edit');
Route::put('/activity/update/{id}', 'ListActivityController@update')->name('update');
Route::post('/activity/delete/{id}', 'ListActivityController@destroy')->name('destroy');
