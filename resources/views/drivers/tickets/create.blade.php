@extends('layouts.admin.layout')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="content-box-large">
                <h1 class="page-header">Alta de de Multa para el Chofer: {{ $driver->name }} {{ $driver->lastname }}</h1>
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <p> {{ $error }}</p>
                            @endforeach
                        </div>
                    @endif

                    @if (session('notification'))
                        <div class="alert alert-success">
                            {{ session('notification') }}
                        </div>
                    @endif
                    <form class="form-horizontal" action="" method="post">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="example-text-input" class="col-3 col-form-label">Numero de Multa</label>
                            <div class="col-9">
                                <input class="form-control" type="text" name="number" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-3 col-form-label">Fecha de Multa</label>
                            <div class="col-9">
                                <input class="form-control" type="date" name="date">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
