@extends('layouts.admin.layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="content-box-large">
                <h1 class="page-header">Clientes</h1>
                @include('layouts.admin.alerts')
                <div class="panel-body">

                    @if (!$users->isEmpty())
                        <table class="table table-bordered">
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
