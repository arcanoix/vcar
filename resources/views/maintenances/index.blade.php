@extends('layouts.admin.layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="content-box-large">
                <h1 class="page-header">Seguimiento de Transportes</h1>
                @include('layouts.admin.alerts')
                <div class="panel-body">

                    @if (!$maintenances->isEmpty())
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th>Nombre de Camion</th>
                              <th>Mantenimiento</th>
                              <th>Última Revisión</th>
                              {{-- <th>Último Kilometraje</th> --}}
                              <th>Póxima Revisión</th>
                              {{-- <th>Próximo KM</th>
                              <th>Observaciones</th> --}}
                              <th>Acciones</th>
                            </tr>
                          </thead>
                          <tbody>
                              @foreach ($maintenances as $maintenance)
                                <tr>
                                    <td>{{ $maintenance->transport->name }}</td>
                                    <td>{{ $maintenance->name }}</td>
                                    <td>{{ $maintenance->last_check }}</td>
                                    {{-- <td>{{ $maintenance->last_km }}</td> --}}
                                    <td>{{ $maintenance->next_check }}</td>
                                    {{-- <td>{{ $maintenance->next_km }}</td> --}}
                                    {{-- <td>{{ $maintenance->observation }}</td> --}}
                                    <td>
                                        <a href="/mantenimientos/{{ $maintenance->id }}" class="badge badge-success">Ver completo</a>
                                        <a href="/mantenimientos/{{ $maintenance->id }}/edit" class="badge badge-info">Editar</a>
                                        <a href="/mantenimientos/{{ $maintenance->id }}/delete" class="badge badge-danger">Eliminar</a>
                                    </td>
                                </tr>
                                @endforeach
                          </tbody>
                        </table>

                        <div class="col-12">
                            <div class="mt-5 mb-5 mx-auto">
                                @if (count($maintenances))
                                    {{ $maintenances->links('pagination::bootstrap-4') }}
                                @endif
                            </div>
                        </div>
                    @else
                        <div class="alert alert-warning">
                            Por el momento aún no hay registro de Mantenimientos.
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection
