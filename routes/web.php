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

Route::group(['middleware' => ['auth']], function () {
    Route::resource('kecelakaan', 'KecelakaanController');
    Route::resource('kehilangan', 'KehilanganController');
    Route::resource('kerusakan', 'KerusakanController');
    Route::get('/laporansaya', function () {
        return view('laporansaya');
    });
    Route::get('seekerusakan', 'SeeallController@seekerusakan');
    Route::get('seekecelakaan', 'SeeallController@seekecelakaan');
    Route::get('seekehilangan', 'SeeallController@seekehilangan');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');

Route::get('test-excel1', 'KerusakanController@export');
Route::get('test-excel2', 'KehilanganController@export');
Route::get('test-excel3', 'KecelakaanController@export');
