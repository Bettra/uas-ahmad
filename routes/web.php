<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\kelasahmadController@index');
    Route::get('kelasahmad', 'App\Http\Controllers\kelasahmadController@index');
    Route::get('kelasahmad/tambah', 'App\Http\Controllers\kelasahmadController@tambah');
    Route::post('kelasahmad/tambah_proses', 'App\Http\Controllers\kelasahmadController@tambah_proses');
    Route::get('kelasahmad/edit/{id}', 'App\Http\Controllers\kelasahmadController@edit');
    Route::post('kelasahmad/edit_proses', 'App\Http\Controllers\kelasahmadController@edit_proses');
    Route::get('kelasahmad/delete/{id}', 'App\Http\Controllers\kelasahmadController@delete');