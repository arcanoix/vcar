@extends('layouts.admin.layout')

@section('content')
    <div class="row">
        <div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <h5 class="breadcrumb__title">Perfil del cliente; {{ $client->name }}</h5>
            <nav class="breadcrumb">
                <a class="breadcrumb__item" href="/">Dashboard</a>
                <a class="breadcrumb__item" href="/clientes">Clientes</a>
                <span class="breadcrumb__item active">Perfil del cliente</span></nav>
        </div>
    </div>
    <div class="row">
        <div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-12">
            @include('layouts.admin.alerts')
        </div>
    </div>

    <div class="row">
        <div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="card">
          <h4 class="card__heading">Información General</h4>
          <div class="card__body">
            <h6 class="card__title">Nombre</h6>
            <p class="card-text">{{ $client->name }}</p>
            <hr>
            <h6 class="card__title">Información</h6>
            <div class="row dr-destination">
                <div class="col-md-2 dr-destino-title">
                    Dirección:
                </div>
                <div class="col-md-10">
                    {{ $client->address }}
                </div>
            </div>
            <div class="row dr-destination">
                <div class="col-md-2 dr-destino-title">
                    Estado:
                </div>
                <div class="col-md-10">
                    {{ $client->state }}
                </div>
            </div>
            <div class="row dr-destination">
                <div class="col-md-2 dr-destino-title">
                    Ciudad:
                </div>
                <div class="col-md-10">
                    {{ $client->city }}
                </div>
            </div>

          </div>
        </div>
        </div>
    </div>
@endsection
