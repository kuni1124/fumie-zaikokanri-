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
Route::get('gyousha', 'FumiesController@index')->name('gyousha');
Route::get('create', 'FumiesController@create')->name('gyousha-create');
Route::post('store', 'FumiesController@store')->name('gyousha-store');