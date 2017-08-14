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
    return redirect('/login');
    // return view('auth/login');
});

Auth::routes();


Route::group(['middleware' => ['role:administrador']], function () {
    // Creación de Usuarios
    Route::get('/usuarios', 'UserController@index');

    Route::get('/usuarios/create', 'UserController@getCreate');
    Route::post('/usuarios/create', 'UserController@postCreate');

    Route::get('/usuarios/{id}', 'UserController@show');

    Route::get('/usuarios/{id}/edit', 'UserController@edit');
    Route::post('/usuarios/{id}/edit', 'UserController@update');

    Route::get('/usuarios/{id}/delete', 'UserController@delete');
});


Route::group(['middleware' => ['role:administrador|usuario']], function () {
    // your routes
    Route::get('/dashboard', 'DashboardController@index');

    //Clientes
    Route::get('/clientes', 'ClientsController@index');

    Route::get('/clientes/create', 'ClientsController@getCreate');
    Route::post('/clientes/create', 'ClientsController@postCreate');

    Route::get('/clientes/{id}', 'ClientsController@show');

    Route::get('/clientes/{id}/edit', 'ClientsController@edit');
    Route::post('/clientes/{id}/edit', 'ClientsController@update');

    Route::get('/clientes/{id}/delete', 'ClientsController@delete');

    //Transporte
    Route::get('/transportes', 'TransportController@index');

    Route::get('/transportes/create', 'TransportController@getCreate');
    Route::post('/transportes/create', 'TransportController@postCreate');

    Route::get('/transportes/{id}', 'TransportController@show');

    Route::get('/transportes/{id}/edit', 'TransportController@edit');
    Route::post('/transportes/{id}/edit', 'TransportController@update');

    Route::get('/transportes/{id}/delete', 'TransportController@delete');

    //Choferes
    Route::get('/choferes', 'DriverController@index');

    Route::get('/choferes/create', 'DriverController@getCreate');
    Route::post('/choferes/create', 'DriverController@postCreate');

    Route::get('/choferes/{id}', 'DriverController@show');

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

    // Reportes de Entrega
    Route::get('/entregas', 'DeliveryReportController@index');

    Route::get('/entregas/incidencias', 'DeliveryReportController@incident');
    Route::get('/entregas/incidencias/pdf', 'PdfController@incidentPDF');

    Route::get('/entregas/create', 'DeliveryReportController@getCreate');
    Route::post('/entregas/create', 'DeliveryReportController@postCreate');

    Route::get('/entregas/{id}', 'DeliveryReportController@show');

    Route::get('/entregas/{id}/edit', 'DeliveryReportController@edit');
    Route::post('/entregas/{id}/edit', 'DeliveryReportController@update');

    Route::get('/entregas/{id}/delete', 'DeliveryReportController@delete');


    // Reportes de Entrega
    Route::get('/mantenimientos', 'MaintenanceController@index');

    Route::get('/mantenimientos/create', 'MaintenanceController@getCreate');
    Route::post('/mantenimientos/create', 'MaintenanceController@postCreate');

    Route::get('/mantenimientos/{id}', 'MaintenanceController@show');

    Route::get('/mantenimientos/{id}/edit', 'MaintenanceController@edit');
    Route::post('/mantenimientos/{id}/edit', 'MaintenanceController@update');

    Route::get('/mantenimientos/{id}/delete', 'MaintenanceController@delete');
});
