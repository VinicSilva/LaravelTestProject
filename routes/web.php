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

Route::prefix('cliente')->group(function(){
    Route::get('/', 'ClientsController@index');
    Route::get('/cadastrar', 'ClientsController@cadastrarCliente');
    Route::post('/cadastrar', 'ClientsController@cadastrar');
    Route::get('/editar/{id}', 'ClientsController@editarCliente');
    Route::post('/editar/{id}', 'ClientsController@editar');
    Route::get('/excluir/{id}', 'ClientsController@excluir');
});