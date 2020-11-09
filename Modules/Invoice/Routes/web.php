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

Route::prefix('home/invoice')->middleware('auth')->group(function() {
    Route::get('/', 'InvoiceController@index')->name('invoice');
    Route::get('/create', 'InvoiceController@create')->name('create-invoice');
    Route::post('/add', 'InvoiceController@store')->name('add-invoice');
    Route::get('/edit/{id}', 'InvoiceController@edit')->name('edit-invoice');
    Route::post('/update/{id}', 'InvoiceController@update')->name('update-invoice');
    Route::delete('/destroy/{id}', 'InvoiceController@destroy')->name('destroy-invoice');
    Route::get('/datatable', 'InvoiceController@datatable')->name('datatable-invoice');
});
