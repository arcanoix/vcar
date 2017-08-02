@extends('layouts.admin.layout')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="content-box-large">
                <h1 class="page-header">Editar Transporte</h1>
                @include('layouts.admin.alerts')
                <div class="panel-body">
                    <form class="form-horizontal" action="" method="post">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="example-text-input" class="col-3 col-form-label">Nombre</label>
                            <div class="col-9">
                                <input class="form-control" type="text" name="name" value="{{ $transport->name }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-3 col-form-label">Marca</label>
                            <div class="col-9">
                                <input class="form-control" type="text" name="brand" value="{{ $transport->brand }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-3 col-form-label">Modelo</label>
                            <div class="col-9">
                                <input class="form-control" type="text" name="model" value="{{ $transport->model }}">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
