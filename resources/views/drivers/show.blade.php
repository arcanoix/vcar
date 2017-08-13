@extends('layouts.admin.layout')

@section('content')
    <div class="row">
        <div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <h5 class="breadcrumb__title">Perfil del chofer; {{ $driver->name }}</h5>
            <nav class="breadcrumb">
                <a class="breadcrumb__item" href="/">Dashboard</a>
                <a class="breadcrumb__item" href="/clientes">Choferes</a>
                <span class="breadcrumb__item active">Perfil del Chofer</span></nav>
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
            <h6 class="card__title">Nombre</h6>
            <p class="card-text">{{ $driver->name }} {{ $driver->lastname }}</p>
            <hr>
            <h6 class="card__title">Observaciones</h6>
            <p>{{ $driver->observation }}</p>
          </div>
        </div>
        </div>

        <div class="col-xs col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="card">
          <h4 class="card__heading">Anexos</h4>
          <div class="card__body">

          </div>
        </div>
        </div>
    </div>
@endsection
