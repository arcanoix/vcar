@extends('layouts.admin.layout')

@section('content')

    <div class="row">
        <div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <h5 class="breadcrumb__title">Registros del sistema</h5>
            <nav class="breadcrumb">
                <a class="breadcrumb__item" href="/">Dashboard</a>
                <span class="breadcrumb__item active">Log</span></nav>
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
                    <h6 class="card__title">Log</h6>
                </div>
                <div class="card__body">

                    @if (!$logs->isEmpty())
                        <table class="table table--responsive thead--default undefined">
                          <thead>
                            <tr>
                              <th>Nombre</th>
                              <th>Apellido</th>

                              <th>Acciones</th>
                            </tr>
                          </thead>
                          <tbody>
                              @foreach ($logs as $log)
                                <tr>
                                  <td>{{ $log->id }}</td>
                                  <td>{{ $log->description }}</td>

                                </tr>
                                @endforeach
                          </tbody>
                        </table>

                        <div class="col-12">
                            <div class="mt-5 mb-5 mx-auto">
                                @if (count($logs))
                                    {{ $logs->links('pagination::bootstrap-4') }}
                                @endif
                            </div>
                        </div>
                    @else
                        <div class="alert alert--warning">
                            Por el momento aún no hay registro del sistema.
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
