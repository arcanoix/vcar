@extends('layouts.admin.layout')

@section('content')
    <div class="row">
        <div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <h5 class="breadcrumb__title">Editar cliente</h5>
            <nav class="breadcrumb">
                <a class="breadcrumb__item" href="/">Dashboard</a>
                <a class="breadcrumb__item" href="/clientes">Clientes</a>
                <span class="breadcrumb__item active">Editar Cliente</span></nav>
        </div>
    </div>
    <div class="row">
        <div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-12">
            @include('layouts.admin.alerts')
        </div>
    </div>

    <div class="row">
        <div class="col-xs col-sm-6 col-md-6 col-lg-6 col-xl-6 ">
            <div class="card">
                <div class="card__heading">
                    <h6 class="card__title">Información General</h6>
                </div>
                <div class="card__body">
                    <form class="form-horizontal" action="" method="post">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="example-text-input" class="col-3 col-form-label">Nombre</label>
                            <div class="col-9">
                                <input class="form-control" type="text" name="name" value="{{ $user->name }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-3 col-form-label">E-mail</label>
                            <div class="col-9">
                                <input class="form-control" type="text" name="email" value="{{ $user->email }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-3 col-form-label">Contraseña</label>
                            <div class="col-9">

                                <input class="form-control" type="text" name="password">
                                <small class="text-muted">Ingresar contraseña nueva, solo si desea actualizar</small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-3 col-form-label">Tipo de Usuario</label>
                            <div class="col-9">
                                <div class="form-group">
                                    <select class="form-control" name="role_id">
                                        @foreach($user->roles as $v)
                                            @if ($v->id)
                                                <option value="{{ $v->id }}">Selecionar tipo de usuario</option>
                                                <label class="label label-success"></label>
                                            @endif
                                        @endforeach
                                      <option value="1">Administrador</option>
                                      <option value="2">Usuario</option>
                                    </select>
                                  </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn--primary">Guardar</button>

                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
