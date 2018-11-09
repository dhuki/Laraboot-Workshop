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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'ListActivityController@index')->name('home');
Route::post('/home', 'ListActivityController@store')->name('store');
Route::get('/ListActivity', 'ListActivityController@show')->name('ListActivity');
Route::post('/ListActivity/{id}', 'ListActivityController@destroy')->name('destroy');
