@extends('layouts.admin.layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="content-box-large">
                <h1 class="page-header">Clientes</h1>
                @include('layouts.admin.alerts')
                <div class="panel-body">

                    @if (!$clients->isEmpty())
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th>Fecha</th>
                              <th>Nombre</th>
                              <th>E-mail</th>
                              <th>Teléfono</th>
                              <th>Cedula</th>
                              <th>Acciones</th>
                            </tr>
                          </thead>
                          <tbody>
                              @foreach ($clients as $client)
                                <tr>
                                  <td>{{ $client->created_at->format('d/m/Y') }}</td>
                                  <td>{{ $client->name }}</td>
                                  <td>{{ $client->email }}</td>
                                  <td>{{ $client->phone }}</td>
                                  <td>{{ $client->cedula }}</td>
                                  <td>
                                      <a href="/clientes/{{ $client->id }}/edit" class="badge badge-info">Editar</a>
                                      <a href="/clientes/{{ $client->id }}/delete" class="badge badge-danger">Eliminar</a>
                                  </td>
                                </tr>
                            @endforeach
                          </tbody>
                        </table>

                        <div class="col-12">
                            <div class="mt-5 mb-5 mx-auto">
                                @if (count($clients))
                                    {{ $clients->links('pagination::bootstrap-4') }}
                                @endif
                            </div>
                        </div>
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
