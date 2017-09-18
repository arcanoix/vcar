@extends('layouts.admin.layout')

@section('content')
    <div class="row">
        <div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <h5 class="breadcrumb__title">Alta de Usuario</h5>
            <nav class="breadcrumb">
                <a class="breadcrumb__item" href="/">Dashboard</a>
                <a class="breadcrumb__item" href="/usuarios">Usuarios</a>
                <span class="breadcrumb__item active">Alta de Usuario</span></nav>
        </div>
    </div>

    <div class="row">
        <div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-12">
            @include('layouts.admin.alerts')
        </div>
    </div>

    <div class="row">
        <div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
            <div class="card">
                <div class="card__heading">
                    <h6 class="card__title">Información General</h6>
                </div>
                <div class="card__body">
                    <form action="" method="post">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="example-text-input" class="col-3 col-form-label">Nombre</label>
                            <div class="col-9">
                                <input class="form-control" type="text" name="name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-3 col-form-label">E-mail</label>
                            <div class="col-9">
                                <input class="form-control" type="text" name="email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-3 col-form-label">Password</label>
                            <div class="col-9">
                                <input class="form-control" type="password" name="password">
                            </div>
                        </div>

                        <button class="btn btn--primary" type="submit">Guardar</button>
                        <a href="/dashboard" class="btn btn--danger">Cancelar</a>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
