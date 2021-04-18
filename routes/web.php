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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','SuratController@index');
Route::get('/surat','SuratController@index');
Route::get('/surat/tambah','SuratController@tambah');
Route::post('/surat/store','SuratController@store');
Route::get('/surat/edit/{id}','SuratController@edit');
Route::post('/surat/update','SuratController@update');
Route::get('/surat/hapus/{id}','SuratController@hapus');

