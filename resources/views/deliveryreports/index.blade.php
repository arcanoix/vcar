@extends('layouts.admin.layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="content-box-large">
                <h1 class="page-header">Seguimiento de Transportes</h1>
                <div class="panel-body">
                    @if (session('notification'))
                        <div class="alert alert-success">
                            {{ session('notification') }}
                        </div>
                    @endif
                    @if (!$deliveryReports->isEmpty())
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>Fecha de salida</th>
                              <th>Fecha de llegada</th>
                              <th>Trasporte</th>
                              <th>Chofer</th>
                              <th>Cliente</th>

                            </tr>
                          </thead>
                          <tbody>
                              @foreach ($deliveryReports as $deliveryReport)
                                <tr>
                                  <td>{{ $deliveryReport->id }}</td>
                                  <td>{{ $deliveryReport->departure_date }}</td>
                                  <td>{{ $deliveryReport->delivery_date }}</td>
                                  <td>{{ $deliveryReport->transport_id }}</td>
                                  <td>{{ $deliveryReport->driver_id }}</td>
                                  <td>{{ $deliveryReport->client_id }}</td>
                                  {{-- <td>
                                      <a href="" class="badge badge-default">Licencia</a>
                                      <a href="" class="badge badge-default">C. Médico</a>
                                  </td>
                                  <td>
                                      <a href="/choferes/{{ $deliveryReport->id }}/multas" class="badge badge-primary">Ver multas</a>
                                      <a href="/choferes/{{ $deliveryReport->id }}/multas/create" class="badge badge-success">Añadir Multa</a>
                                  </td>
                                  <td>
                                      <a href="/choferes/{{ $deliveryReport->id}}/perfil" class="badge badge-default">Ver Perfil</a>
                                      <a href="/choferes/{{ $deliveryReport->id }}/edit" class="badge badge-info">Editar</a>
                                      <a href="/choferes/{{ $deliveryReport->id }}/delete" class="badge badge-danger">Eliminar</a>
                                  </td> --}}
                                </tr>
                                @endforeach
                          </tbody>
                        </table>

                        {{-- <div class="col-12">
                            <div class="mt-5 mb-5 mx-auto">
                                @if (count($deliveryReports))
                                    {{ $deliveryReports->links('pagination::bootstrap-4') }}
                                @endif
                            </div>
                        </div> --}}
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
