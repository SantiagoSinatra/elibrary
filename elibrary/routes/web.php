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

Route::get('/', 'InicioController@index')->name('inicio');
Route::get('/vender', 'ProductosController@create')->name('crear');
Route::post('/guardarProducto', 'ProductosController@save')->name('guardar');

Auth::routes();



/* Route::get('/', function () {
    return view('welcome');
}); */
