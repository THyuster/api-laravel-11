<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {

    Route::resource('usuarios', 'Api\V1\UsuariosController');
    Route::post('usuarios/{id}', 'Api\V1\UsuariosController@update');
    Route::delete('usuarios/{id}', 'Api\V1\UsuariosController@destroy');

    Route::resource('personas', 'Api\V1\PersonasController');
    Route::post('personas/{id}', 'Api\V1\PersonasController@update');
    Route::delete('personas/{id}', 'Api\V1\PersonasController@destroy');

    Route::resource('productos', 'Api\V1\ProductosController');
    Route::post('productos/{id}', 'Api\V1\ProductosController@update');
    Route::delete('productos/{id}', 'Api\V1\ProductosController@destroy');
});