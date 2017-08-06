@extends('layouts.admin.layout')

@section('content')

    <div class="row">
        <div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <h5 class="breadcrumb__title">Multas de Chofer: {{ $driver->name }} {{ $driver->lastname }}</h5>
            <nav class="breadcrumb">
                <a class="breadcrumb__item" href="/">Dashboard</a>
                <a class="breadcrumb__item" href="/choferes/{{$driver->id}}">Chofer; {{ $driver->name }} {{ $driver->lastname }}</a>
                <span class="breadcrumb__item active">Choferes</span></nav>
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
                    <h6 class="card__title">Multas </h6>
                </div>
                <div class="card__body">
                    @if (!$tickets->isEmpty())
                        <table class="table table--responsive thead--default undefined">
                          <thead>
                            <tr>
                              <th>Numero de Multa</th>
                              <th>Fecha de Multa</th>
                              <th>Acciones</th>
                            </tr>
                          </thead>
                          <tbody>
                              @foreach ($tickets as $ticket)
                                <tr>
                                  <td>{{ $ticket->number }}</td>
                                  <td>{{ $ticket->date }}</td>
                                  <td>
                                      <a href="/choferes/multas/{{ $ticket->id }}/edit" class="badge badge--info">Editar</a>
                                      <a href="/choferes/multas/{{ $ticket->id }}/delete" class="badge badge--danger">Eliminar</a>
                                  </td>
                                </tr>
                                @endforeach
                          </tbody>
                        </table>

                        {{-- <div class="col-12">
                            <div class="mt-5 mb-5 mx-auto">
                                @if (count($tickets))
                                    {{ $tickets->links('pagination::bootstrap-4') }}
                                @endif
                            </div>
                        </div> --}}
                    @else
                        <div class="alert alert--warning">
                            Por el momento aún no hay registro de multas para este chofer.
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
