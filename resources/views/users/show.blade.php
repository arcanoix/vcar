@extends('layouts.admin.layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="content-box-large">
                <h1 class="page-header">Perfil de Cliente; {{ $client->name }}</h1>
                @include('layouts.admin.alerts')
                <div class="panel-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                  <h4 class="card-header">Información General</h4>
                                  <div class="card-block">
                                    <h6 class="card-title">Nombre</h6>
                                    <p class="card-text">{{ $client->name }}</p>
                                    <hr>
                                    <h6 class="card-title">Información</h6>
                                    <div class="row dr-destination">
                                        <div class="col-md-3 dr-destino-title">
                                            Dirección:
                                        </div>
                                        <div class="col-md-9">
                                            {{ $client->address }}
                                        </div>
                                    </div>
                                    <div class="row dr-destination">
                                        <div class="col-md-3 dr-destino-title">
                                            Estado:
                                        </div>
                                        <div class="col-md-9">
                                            {{ $client->state }}
                                        </div>
                                    </div>
                                    <div class="row dr-destination">
                                        <div class="col-md-3 dr-destino-title">
                                            Ciudad:
                                        </div>
                                        <div class="col-md-9">
                                            {{ $client->city }}
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
    </div>
@endsection
