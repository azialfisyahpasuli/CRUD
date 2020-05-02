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

Route::get('Inputbarang','BarangController@created');
Route::POST('savecreate','BarangController@savecreate');
Route::get('daftarbarang','BarangController@read');
Route::get('editbarang/{id}','BarangController@update');
Route::post('update','BarangController@saveupdate');
Route::get('hapus/{id}','BarangController@delete');
