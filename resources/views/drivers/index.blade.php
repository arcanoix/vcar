@extends('layouts.admin.layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="content-box-large">
                <h1 class="page-header">Choferes</h1>
                <div class="panel-body">
                    @if (session('notification'))
                        <div class="alert alert-success">
                            {{ session('notification') }}
                        </div>
                    @endif
                    @if (!$drivers->isEmpty())
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th>Nombre</th>
                              <th>Apellido</th>
                              <th>Documentos</th>
                              <th>Observaciones</th>
                              <th>Acciones</th>
                            </tr>
                          </thead>
                          <tbody>
                              @foreach ($drivers as $driver)
                                <tr>
                                  <td>{{ $driver->name }}</td>
                                  <td>{{ $driver->lastname }}</td>
                                  <td>
                                      <a href="" class="btn btn-info btn-sm btn-block">Licencia</a>
                                      <a href="" class="btn btn-danger btn-sm btn-block">C. Médico</a>
                                  </td>
                                  <td>{{ $driver->observation }}</td>
                                  <td>
                                      <a href="/choferes/{{ $driver->id }}/edit" class="btn btn-info btn-sm btn-block">Editar</a>
                                      <a href="/choferes/{{ $driver->id }}/delete" class="btn btn-danger btn-sm btn-block">Eliminar</a>
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
