@extends('layouts.admin.layout')

@section('content')
    <div class="row">
        <div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <h5 class="breadcrumb__title">Mantenimiento: No. {{ $maintenance->id }}</h5>
            <nav class="breadcrumb">
                <a class="breadcrumb__item" href="/">Dashboard</a>
                <a class="breadcrumb__item" href="/mantenimientos">Mantenimientos</a>
                <span class="breadcrumb__item active">Mantenimiento: No. {{ $maintenance->id }}</span>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-12">
            @include('layouts.admin.alerts')
        </div>
    </div>

    <div class="row">
        <div class="col-xs col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="card">
                  <h4 class="card__heading">Información General</h4>
                  <div class="card__body">
                      <h6 class="card-title">Transporte</h6>
                      <p class="card-text">{{ $maintenance->transport->name }}</p>
                      <hr>
                      <h6 class="card-title">Tipo de Mantenimiento</h6>
                      <p class="card-text">{{ $maintenance->name }}</p>
                      <hr>
                      <h6 class="card-title">Información de Mantenimiento</h6>
                      <div class="d-flex flex-row dr-card-dates justify-content-center">
                          <div class="card card--inverse card--warning">
                              <div class="card-block">
                                  <h6 class="card-title">Fecha de Mantenimiento</h6>
                                  <p class="card-text">{{ $maintenance->last_check }}</p>
                              </div>
                          </div>

                          <div class="card card--inverse card--success">
                              <div class="card-block">
                                  <h6 class="card-title">KM actual del Mantenimiento</h6>
                                  <p class="card-text">{{ $maintenance->last_km }}</p>
                              </div>
                          </div>
                      </div>
                  </div>
            </div>
        </div>

        <div class="col-xs col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="card">
                  <h4 class="card__heading">Información General</h4>
                  <div class="card__body">
                      <h6 class="card-title">Información para el Próximo mantenimiento</h6>
                      <div class="d-flex flex-row dr-card-dates justify-content-center">
                          <div class="card card--inverse card--warning">
                              <div class="card-block">
                                  <h6 class="card-title">Prox. Fecha de Mantenimiento</h6>
                                  <p class="card-text">{{ $maintenance->next_check }}</p>
                              </div>
                          </div>

                          <div class="card card--inverse card--success">
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
                <h4 class="card__heading">Observaciones</h4>
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
@endsection
