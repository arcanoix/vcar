@extends('layouts.admin.layout')

@section('content')
    <div class="row">
        <div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <h5 class="breadcrumb__title">Todos los Usuarios</h5>
            <nav class="breadcrumb">
                <a class="breadcrumb__item" href="/">Dashboard</a>
                <span class="breadcrumb__item active">Usuarios</span></nav>
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
                <div class="card__heading">
                    <h6 class="card__title">Clientes</h6>
                </div>
                <div class="card__body">
                    @if (!$users->isEmpty())
                        <table class="table table--responsive thead--default undefined">
                          <thead>
                            <tr>
                              <th>Nombre</th>
                              <th>E-mail</th>
                              <th>Tipo de Usuario</th>
                              <th>Acciones</th>
                            </tr>
                          </thead>
                          <tbody>
                              @foreach ($users as $user)
                                <tr>
                                  <td>{{ $user->name }}</td>
                                  <td>{{ $user->email }}</td>
                                  <td>
                                      @foreach($user->roles as $v)
                                          @if ($v->display_name)
                                              {{ $v->display_name }}
                                          @else
                                              No hay rol asignado.
                                          @endif
                                      @endforeach
                                  </td>
                                  {{-- <td>{{ $user->role_id->display_name}}</td> --}}
                                  <td>
                                      <a href="/usuarios/{{ $user->id }}/edit" class="badge badge-info">Editar</a>
                                      <a href="/usuarios/{{ $user->id }}/delete" class="badge badge-danger">Eliminar</a>
                                  </td>
                                </tr>
                            @endforeach
                          </tbody>
                        </table>

                        {{-- <div class="col-12">
                            <div class="mt-5 mb-5 mx-auto">
                                @if (count($users))
                                    {{ $users->links('pagination::bootstrap-4') }}
                                @endif
                            </div>
                        </div> --}}
                    @else
                        <div class="alert alert-warning">
                            Por el momento aún no hay registro de clientes.
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
