@extends('layouts.admin.layout')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="content-box-large">
                <h1 class="page-header">Editar Cliente</h1>
                @include('layouts.admin.alerts')
                <div class="panel-body">
                    <form class="form-horizontal" action="" method="post">
                        {{ csrf_field() }}
                        <div class="card">
                            <h4 class="card-header">Información General </h4>
                            <div class="card-block">
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-3 col-form-label">Empresa</label>
                                    <div class="col-9">
                                        <input class="form-control" type="text" name="name" value="{{ $client->name }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-3 col-form-label">Empresa</label>
                                    <div class="col-9">
                                        <input class="form-control" type="text" name="email" value="{{ $client->email }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-3 col-form-label">Empresa</label>
                                    <div class="col-9">
                                        <input class="form-control" type="text" name="phone" value="{{ $client->phone }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-3 col-form-label">Empresa</label>
                                    <div class="col-9">
                                        <input class="form-control" type="text" name="cedula" value="{{ $client->cedula }}">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
