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

Route::get('/', 'DataUmatController@index');
Route::get('/dataUmat/{id}', 'DataUmatController@show');
Route::get('/dataUmat/PDF/{id}', 'DataUmatController@cetak_pdf');
Route::get('/umatPribadi', 'UmatPribadiController@index');
Route::get('/umatPribadi/{id}', 'UmatPribadiController@show');
Route::get('/umatPribadi/{id}/{keyword}', 'UmatPribadiController@liveSearch');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

