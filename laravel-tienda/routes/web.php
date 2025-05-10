<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('clientes')->group(function () {
    Route::get('/', 'Clientes\ClienteController@consultar');
    Route::post('/store', 'Clientes\ClienteController@store');
});

Route::prefix('productos')->group(function () {
    Route::get('/', 'Productos\ProductoController@consultar');
    Route::post('/store', 'Productos\ProductoController@store');
});
