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

Route::get('/administracion','UsuariosController@index');

Route::post('/busqueda','UsuariosController@show');

Route::post('/AgregarUsuario','UsuariosController@store');

Route::post('/CambiarPago/{id}','UsuariosController@ModifyPay')->where(['id' => '[0-9]+']);

Route::post('/BorrarNina/{id}','UsuariosController@destroy')->where(['id' => '[0-9]+']);

Route::post('/PagarNina/{id}','UsuariosController@Pay')->where(['id' => '[0-9]+']);

Route::post('/login','UsuariosController@login');

