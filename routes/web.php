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
    return view('auth/login');
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index');

Route::get('/clientes', 'ClientsController@index');

Route::get('/clientes/create', 'ClientsController@getCreate');
Route::post('/clientes/create', 'ClientsController@postCreate');

Route::get('/clientes/{id}/edit', 'ClientsController@edit');
Route::post('/clientes/{id}/edit', 'ClientsController@update');

Route::get('/clientes/{id}/delete', 'ClientsController@delete');
