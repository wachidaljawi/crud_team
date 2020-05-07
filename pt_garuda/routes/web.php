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

Route::get('/karyawan', 'KaryawanController@index');

Route::get('/karyawan/karyawan', 'KaryawanController@create');

Route::get('/karyawan/{karyawan}', 'KaryawanController@show');

Route::post('/karyawan', 'KaryawanController@store');

Route::delete('/karyawan/{karyawan}', 'KaryawanController@destroy')->name('karyawan.destroy');

Route::get('/karyawan/{karyawan}/edit', 'KaryawanController@edit')->name('karyawan.edit');

Route::patch('/karyawan/{karyawan}', 'KaryawanController@update');

// Route::resource('karyawan', 'KaryawanController');

Route::get('/gaji', 'GajiController@index');

Route::get('/gaji/gaji', 'GajiController@create');

Route::post('/gaji', 'GajiController@store');

Route::delete('/gaji/{gaji}', 'GajiController@destroy')->name('gaji.destroy');

Route::get('/gaji/{gaji}/edit', 'GajiController@edit')->name('gaji.edit');

Route::patch('/gaji/{gaji}', 'GajiController@update');

// Route::resource('gaji', 'GajiController');
