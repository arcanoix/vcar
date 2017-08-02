@extends('layouts.admin.layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="content-box-large">
                <h1 class="page-header">Seguimiento de transporte: {{ $deliveryReport->id }}</h1>
                @include('layouts.admin.alerts')
                <div class="panel-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                  <h4 class="card-header">Información General</h4>
                                  <div class="card-block">
                                    <h6 class="card-title">Cliente</h6>
                                    <p class="card-text">{{ $deliveryReport->client->name }}</p>
                                    <hr>
                                    <h6 class="card-title">Fecha y Hora</h6>
                                    <div class="d-flex flex-row dr-card-dates justify-content-center">
                                        <div class="card card-inverse card-warning">
                                            <div class="card-block">
                                                <h6 class="card-title">Salida</h6>
                                                <p class="card-text">{{ $deliveryReport->departure_date }}</p>
                                            </div>
                                        </div>

                                        <div class="card card-inverse card-success">
                                            <div class="card-block">
                                                <h6 class="card-title">Llegada</h6>
                                                <p class="card-text">{{ $deliveryReport->delivery_date }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <h6 class="card-title">Información de Destino</h6>
                                    <div class="row dr-destination">
                                        <div class="col-md-3 dr-destino-title">
                                            Estado:
                                        </div>
                                        <div class="col-md-9">
                                            {{ $deliveryReport->destination_state }}
                                        </div>
                                    </div>
                                    <div class="row dr-destination">
                                        <div class="col-md-3 dr-destino-title">
                                            Ciudad:
                                        </div>
                                        <div class="col-md-9">
                                            {{ $deliveryReport->destination_city }}
                                        </div>
                                    </div>
                                    <div class="row dr-destination">
                                        <div class="col-md-3 dr-destino-title">
                                            Dirección:
                                        </div>
                                        <div class="col-md-9">
                                            {{ $deliveryReport->destination_address }}
                                        </div>
                                    </div>
                                  </div>
                                </div>
                            </div>

                            <div class="col-md-6 dr-cards-two">
                                <div class="card">
                                  <h4 class="card-header">Carga</h4>
                                  <div class="card-block">
                                    <h6 class="card-title">Tipo de Carga</h6>
                                    <p class="card-text">{{ $deliveryReport->load_type }}</p>
                                    <hr>
                                    <h6 class="card-title">Condición</h6>
                                    <p class="card-text">{{ $deliveryReport->condition }}</p>

                                  </div>
                                </div>

                                <div class="card">
                                  <h4 class="card-header">Información de Transporte</h4>
                                  <div class="card-block">
                                    <h6 class="card-title">Transporte</h6>
                                    <p class="card-text">{{ $deliveryReport->transport->name }}</p>
                                    <hr>
                                    <h6 class="card-title">Chofer</h6>
                                    <p class="card-text">{{ $deliveryReport->driver->name }}</p>
                                  </div>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
