<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'ContactController@index')->name('home');
Route::get('create', 'ContactController@create')->name('create');
Route::post('create', 'ContactController@store')->name('store');
Route::get('edit/{id}', 'ContactController@edit')->name('edit');
Route::post('update/{id}', 'ContactController@update')->name('update');
Route::delete('delete/{id}','ContactController@delete')->name('delete');
