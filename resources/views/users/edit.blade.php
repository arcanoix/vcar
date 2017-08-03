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

                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
