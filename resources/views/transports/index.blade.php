@extends('layouts.admin.layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="content-box-large">
                <h1 class="page-header">Transportes</h1>
                <div class="panel-body">
                    @if (session('notification'))
                        <div class="alert alert-success">
                            {{ session('notification') }}
                        </div>
                    @endif
                    @if (!$transports->isEmpty())
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th>Nombre</th>
                              <th>Marca</th>
                              <th>Modelo</th>
                            </tr>
                          </thead>
                          <tbody>
                              @foreach ($transports as $transport)
                                <tr>
                                  <td>{{ $transport->name }}</td>
                                  <td>{{ $transport->brand }}</td>
                                  <td>{{ $transport->model }}</td>
                                  <td>
                                      <a href="/transporte/{{ $transport->id }}/edit" class="btn btn-info btn-sm">Editar</a>
                                      <a href="/transporte/{{ $transport->id }}/delete" class="btn btn-danger btn-sm">Eliminar</a>
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
                            Por el momento aún no hay registro de clientes.
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection
