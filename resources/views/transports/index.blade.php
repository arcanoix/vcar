@extends('layouts.admin.layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="content-box-large">
                <h1 class="page-header">Transportes</h1>
                @include('layouts.admin.alerts')
                <div class="panel-body">
                    @if (!$transports->isEmpty())
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th>Nombre</th>
                              <th>Marca</th>
                              <th>Modelo</th>
                              <th>Acciones</th>
                            </tr>
                          </thead>
                          <tbody>
                              @foreach ($transports as $transport)
                                <tr>
                                  <td>{{ $transport->name }}</td>
                                  <td>{{ $transport->brand }}</td>
                                  <td>{{ $transport->model }}</td>
                                  <td>
                                      <a href="/transportes/{{ $transport->id }}/edit" class="badge badge-info">Editar</a>
                                      <a href="/transportes/{{ $transport->id }}/delete" class="badge badge-danger">Eliminar</a>
                                  </td>
                                </tr>
                                @endforeach
                          </tbody>
                        </table>

                        <div class="col-12">
                            <div class="mt-5 mb-5 mx-auto">
                                @if (count($transports))
                                    {{ $transports->links('pagination::bootstrap-4') }}
                                @endif
                            </div>
                        </div>
                    @else
                        <div class="alert alert-warning">
                            Por el momento aún no hay registro de transportes.
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection
