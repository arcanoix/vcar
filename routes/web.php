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


//Clientes
Route::get('/clientes', 'ClientsController@index');

Route::get('/clientes/create', 'ClientsController@getCreate');
Route::post('/clientes/create', 'ClientsController@postCreate');

Route::get('/clientes/{id}/edit', 'ClientsController@edit');
Route::post('/clientes/{id}/edit', 'ClientsController@update');

Route::get('/clientes/{id}/delete', 'ClientsController@delete');

//Transporte
Route::get('/transportes', 'TransportController@index');

Route::get('/transportes/create', 'TransportController@getCreate');
Route::post('/transportes/create', 'TransportController@postCreate');

Route::get('/transportes/{id}/edit', 'TransportController@edit');
Route::post('/transportes/{id}/edit', 'TransportController@update');

Route::get('/transportes/{id}/delete', 'TransportController@delete');

//Choferes
Route::get('/choferes', 'DriverController@index');

Route::get('/choferes/create', 'DriverController@getCreate');
Route::post('/choferes/create', 'DriverController@postCreate');

Route::get('/choferes/{id}/edit', 'DriverController@edit');
Route::post('/choferes/{id}/edit', 'DriverController@update');

Route::get('/choferes/{id}/delete', 'DriverController@delete');

// Multas de Choferes
Route::get('/choferes/{id}/multas', 'TicketController@index');

Route::get('/choferes/{id}/multas/create', 'TicketController@getCreate');
Route::post('/choferes/{id}/multas/create', 'TicketController@postCreate');

Route::get('/choferes/multas/{id}/edit', 'TicketController@edit');
Route::post('/choferes/multas/{id}/edit', 'TicketController@update');

Route::get('/choferes/multas/{id}/delete', 'TicketController@delete');
