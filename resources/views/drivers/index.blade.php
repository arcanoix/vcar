@extends('layouts.admin.layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="content-box-large">
                <h1 class="page-header">Choferes</h1>
                @include('layouts.admin.alerts')
                <div class="panel-body">

                    @if (!$drivers->isEmpty())
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th>Nombre</th>
                              <th>Apellido</th>
                              <th>Documentos</th>
                              <th>Multas</th>
                              {{-- <th>Observaciones</th> --}}
                              <th>Acciones</th>
                            </tr>
                          </thead>
                          <tbody>
                              @foreach ($drivers as $driver)
                                <tr>
                                  <td>{{ $driver->name }}</td>
                                  <td>{{ $driver->lastname }}</td>
                                  <td>
                                      <a href="" class="badge badge-default">Licencia</a>
                                      <a href="" class="badge badge-default">C. Médico</a>
                                  </td>
                                  <td>
                                      <a href="/choferes/{{ $driver->id }}/multas" class="badge badge-primary">Ver multas</a>
                                      <a href="/choferes/{{ $driver->id }}/multas/create" class="badge badge-success">Añadir Multa</a>
                                  </td>
                                  {{-- <td>{{ $driver->observation }}</td> --}}
                                  <td>
                                      <a href="/choferes/{{ $driver->id}}/perfil" class="badge badge-default">Ver Perfil</a>
                                      <a href="/choferes/{{ $driver->id }}/edit" class="badge badge-info">Editar</a>
                                      <a href="/choferes/{{ $driver->id }}/delete" class="badge badge-danger">Eliminar</a>
                                  </td>
                                </tr>
                                @endforeach
                          </tbody>
                        </table>

                        <div class="col-12">
                            <div class="mt-5 mb-5 mx-auto">
                                @if (count($drivers))
                                    {{ $drivers->links('pagination::bootstrap-4') }}
                                @endif
                            </div>
                        </div>
                    @else
                        <div class="alert alert-warning">
                            Por el momento aún no hay registro de choferes.
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection
