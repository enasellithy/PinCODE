<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'App\Http\Controllers\PIN\PINController@index');
Route::post('/bin_code','App\Http\Controllers\PIN\PINController@generate');
