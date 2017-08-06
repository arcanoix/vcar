@extends('layouts.admin.layout')

@section('content')
    <div class="row">
        <div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <h5 class="breadcrumb__title">Todos los Mantenimientos</h5>
            <nav class="breadcrumb">
                <a class="breadcrumb__item" href="/">Dashboard</a>
                <span class="breadcrumb__item active">Mantenimientos</span></nav>
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
                    @if (!$maintenances->isEmpty())
                        <table class="table table--responsive thead--default undefined">
                          <thead>
                            <tr>
                              <th>Nombre de Camion</th>
                              <th>Tipo de Mantenimiento</th>
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
                                        <a href="/mantenimientos/{{ $maintenance->id }}" class="badge badge--success">Ver completo</a>
                                        <a href="/mantenimientos/{{ $maintenance->id }}/edit" class="badge badge--info">Editar</a>
                                        <a href="/mantenimientos/{{ $maintenance->id }}/delete" class="badge badge--danger">Eliminar</a>
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
