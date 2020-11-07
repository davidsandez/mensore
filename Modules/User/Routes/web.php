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
//Auth::routes();

Route::prefix('home/user')->middleware('auth')->group(function() {
    Route::get('/', 'UserController@index')->name('user');
    Route::get('/datatable', 'UserController@datatable')->name('datatable-user');
});

