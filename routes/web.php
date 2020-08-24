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

Route::get('/', 'DataUmatController@index')->name('home');
Route::get('/dataUmat/{id}', 'DataUmatController@show');
Route::get('/dataUmat/PDF/{id}', 'DataUmatController@cetak_pdf');
Route::get('/umatPribadi', 'UmatPribadiController@index');
Route::get('/umatPribadi/livesearch/{keyword}', 'UmatPribadiController@liveSearch');
Route::get('/detailUmat/{umat_nama}', 'UmatPribadiController@detail');
Auth::routes();

