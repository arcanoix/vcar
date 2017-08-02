@extends('layouts.admin.layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="content-box-large">
                <h1 class="page-header">Perfil de Chofer; {{ $driver->name }}</h1>
                @include('layouts.admin.alerts')
                <div class="panel-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                  <h4 class="card-header">Información General</h4>
                                  <div class="card-block">
                                    <h6 class="card-title">Nombre</h6>
                                    <p class="card-text">{{ $driver->name }} {{ $driver->lastname }}</p>
                                    <hr>
                                    <h6 class="card-title">Observaciones</h6>
                                    <div class="row dr-destination">
                                        <div class="">
                                            {{ $driver->observation }}
                                        </div>
                                    </div>
                                  </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card">
                                  <h4 class="card-header">Anexos</h4>
                                  <div class="card-block text-center">
                                    <a href="#" class="btn btn-primary">Licencia</a>
                                    <a href="#" class="btn btn-success">Certificado Médico</a>
                                    <a href="/choferes/{{ $driver->id }}/multas" class="btn btn-warning">Multas</a>
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
