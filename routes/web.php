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

Route::prefix('/kriteria')->group(function ()
{
    Route::get('/', 'KriteriaController@index')->name('kriteria');
    Route::get('/tambah', 'KriteriaController@create')->name('kriteria.tambah');
    Route::post('/tambah', 'KriteriaController@store')->name('kriteria.simpan');
    Route::get('/edit/{id}', 'KriteriaController@edit')->name('kriteria.edit');
    Route::post('/edit/{id}', 'KriteriaController@update')->name('kriteria.update');
    Route::post('/hapus/{id}', 'KriteriaController@destroy')->name('kriteria.hapus');
});
