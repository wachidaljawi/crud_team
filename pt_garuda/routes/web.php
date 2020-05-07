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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bagian', 'BagianController@index')->name('bagian.index');
Route::get('/bagian/create', 'BagianController@create')->name('bagian.create');
Route::post('/bagian', 'BagianController@store')->name('bagian.store');
Route::get('/bagian/{bagian}', 'BagianController@show')->name('bagian.show');
Route::get('/bagian/{bagian}/edit', 'BagianController@edit')->name('bagian.edit');
Route::put('/bagian/{bagian}', 'BagianController@update')->name('bagian.update');
Route::delete('/bagian/{bagian}', 'BagianController@destroy')->name('bagian.destroy');

