@extends('layouts.admin.layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="content-box-large">
                <h1 class="page-header">Mantenimiento: No. {{ $maintenance->id }}</h1>
                @include('layouts.admin.alerts')
                <div class="panel-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                  <h4 class="card-header">Información General</h4>
                                  <div class="card-block">
                                    <h6 class="card-title">Transporte</h6>
                                    <p class="card-text">{{ $maintenance->transport->name }}</p>
                                    <hr>
                                    <h6 class="card-title">Nombre de Mantenimiento</h6>
                                    <p class="card-text">{{ $maintenance->name }}</p>
                                    <hr>
                                    <h6 class="card-title">Información de Mantenimiento</h6>
                                    <div class="d-flex flex-row dr-card-dates justify-content-center">
                                        <div class="card card-inverse card-warning">
                                            <div class="card-block">
                                                <h6 class="card-title">Fecha de Mantenimiento</h6>
                                                <p class="card-text">{{ $maintenance->last_check }}</p>
                                            </div>
                                        </div>

                                        <div class="card card-inverse card-success">
                                            <div class="card-block">
                                                <h6 class="card-title">KM actual del Mantenimiento</h6>
                                                <p class="card-text">{{ $maintenance->last_km }}</p>
                                            </div>
                                        </div>
                                    </div>

                                  </div>
                                </div>
                            </div>

                            <div class="col-md-6 dr-cards-two">
                                <div class="card">
                                  <h4 class="card-header">Información Próximo Mantenimiento</h4>
                                  <div class="card-block">
                                      <h6 class="card-title">Información para el Próximo mantenimiento</h6>
                                      <div class="d-flex flex-row dr-card-dates justify-content-center">
                                          <div class="card card-inverse card-warning">
                                              <div class="card-block">
                                                  <h6 class="card-title">Prox. Fecha de Mantenimiento</h6>
                                                  <p class="card-text">{{ $maintenance->next_check }}</p>
                                              </div>
                                          </div>

                                          <div class="card card-inverse card-success">
                                              <div class="card-block">
                                                  <h6 class="card-title">KM para el prox. Mantenimiento</h6>
                                                  <p class="card-text">{{ $maintenance->next_km }}</p>
                                              </div>
                                          </div>
                                      </div>

                                  </div>
                                </div>

                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <h4 class="card-header">Observacion</h4>
                                    <div class="card-block">
                                        <h6 class="card-title"></h6>
                                        @if ($maintenance->observation)
                                            <p>{{ $maintenance->observation }}</p>
                                        @else
                                            <div class="alert alert-warning">
                                                No hay observaciones.
                                            </div>
                                        @endif

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
