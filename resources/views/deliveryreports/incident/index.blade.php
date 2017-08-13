@extends('layouts.admin.layout')

@section('content')

    <div class="row">
        <div class="col-xs col-sm-12 col-md-10 col-lg-10 col-xl-10">
            <h5 class="breadcrumb__title">Seguimiento de Incidencias</h5>
            <nav class="breadcrumb">
                <a class="breadcrumb__item" href="/">Dashboard</a>
                <a class="breadcrumb__item" href="/entregas">Entregas</a>
                <span class="breadcrumb__item active">Incidencias</span></nav>


        </div>
        <div class="col-xs col-sm-12 col-md-2 col-lg-2 col-xl-2">
            <div class="right__content mt--3 text-right">
                <a href="/entregas/incidencias/pdf" class="btn btn--primary btn--outline btn--sm btn--round">PDF</a>
            </div>
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
                <div class="card__heading">Incidencias</div>
                <div class="card__body">
                    @if (!$deliveryReports->isEmpty())
                        <table class="table table--responsive thead--default undefined">
                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>Cliente</th>
                              <th>Trasporte</th>
                              <th>Chofer</th>
                              <th>Incidencia</th>
                              <th>Fecha y hora de salida</th>
                              <th>Fecha y hora de llegada</th>
                              {{-- <th>Acciones</th> --}}
                            </tr>
                          </thead>
                          <tbody>
                              @foreach ($deliveryReports as $deliveryReport)
                                <tr>
                                  <td>{{ $deliveryReport->id }}</td>
                                  <td><a href="/clientes/{{ $deliveryReport->client->id }}">{{ $deliveryReport->client->name }}</a></td>
                                  <td><a href="/transportes/{{ $deliveryReport->transport->id }}">{{ $deliveryReport->transport->name }}</a></td>
                                  <td><a href="/choferes/{{ $deliveryReport->driver->id }}">{{ $deliveryReport->driver->name }}</a></td>
                                  <td>{{ $deliveryReport->incident }}</td>
                                  <td>{{ $deliveryReport->departure_date }}</td>
                                  <td>{{ $deliveryReport->delivery_date }}</td>
                                  {{-- <td>
                                      <a href="/entregas/{{ $deliveryReport->id }}" class="badge badge-success">Ver</a>
                                      <a href="/entregas/{{ $deliveryReport->id }}/edit" class="badge badge-info">Editar</a>
                                      <a href="/entregas/{{ $deliveryReport->id }}/delete" class="badge badge-danger">Eliminar</a>
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
