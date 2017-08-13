@extends('layouts.admin.layout')

@section('content')
    {{-- <div class="row">
        <div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <h5 class="breadcrumb__title">Perfil del Usuario; {{ $user->name }}</h5>
            <nav class="breadcrumb">
                <a class="breadcrumb__item" href="/">Dashboard</a>
                <a class="breadcrumb__item" href="/usuarios">Usuarios</a>
                <span class="breadcrumb__item active">Perfil del Usuario</span></nav>
        </div>
    </div>
    <div class="row">
        <div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-12">
            @include('layouts.admin.alerts')
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="content-box-large">
                <h1 class="page-header">Perfil de Cliente; {{ $user->name }}</h1>
                @include('layouts.admin.alerts')
                <div class="panel-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                  <h4 class="card-header">Información General</h4>
                                  <div class="card-block">
                                    <h6 class="card-title">Nombre</h6>
                                    <p class="card-text">{{ $user->name }}</p>
                                    <hr>
                                    <h6 class="card-title">Información</h6>
                                    <div class="row dr-destination">
                                        <div class="col-md-3 dr-destino-title">
                                            Dirección:
                                        </div>
                                        <div class="col-md-9">
                                            {{ $user->address }}
                                        </div>
                                    </div>
                                    <div class="row dr-destination">
                                        <div class="col-md-3 dr-destino-title">
                                            Estado:
                                        </div>
                                        <div class="col-md-9">
                                            {{ $user->state }}
                                        </div>
                                    </div>
                                    <div class="row dr-destination">
                                        <div class="col-md-3 dr-destino-title">
                                            Ciudad:
                                        </div>
                                        <div class="col-md-9">
                                            {{ $user->city }}
                                        </div>
                                    </div>

                                  </div>
                                </div>
                            </div>


                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div> --}}
@endsection
