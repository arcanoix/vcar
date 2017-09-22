@extends('layouts.admin.layout')

@section('content')

    <div class="row">
        <div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <h5 class="breadcrumb__title">Todos los Choferes</h5>
            <nav class="breadcrumb">
                <a class="breadcrumb__item" href="/">Dashboard</a>
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
                    <h6 class="card__title">Choferes</h6>
                </div>
                <div class="card__body">
                    @if (!$drivers->isEmpty())
                        <table class="table table--responsive thead--default undefined">
                          <thead>
                            <tr>
                              <th>Nombre</th>
                              <th>Apellido</th>
                              <th>Documentos</th>
                              <th>Multas</th>
                              {{-- <th>Observaciones</th> --}}
                              <th>Acciones</th>
                            </tr>
                          </thead>
                          <tbody>
                              @foreach ($drivers as $driver)
                                <tr>
                                  <td>{{ $driver->name }}</td>
                                  <td>{{ $driver->lastname }}</td>
                                  <td>
                                      @if ($driver->licence)
                                          <a href="{{ asset('uploads/licences/'.$driver->licence) }}" class="badge badge--default">Licencia</a>
                                      @else
                                            <span class="badge badge--danger">Falta Licencia</span>
                                      @endif
                                      @if ($driver->medical_certificate)
                                          <a href="{{ asset('uploads/certificates/'.$driver->medical_certificate) }}" class="badge badge--default">C. Médico</a>
                                      @else
                                          <span class="badge badge--danger">Falta C. Médico</span>
                                      @endif
                                  </td>
                                  <td>
                                      <a href="/choferes/{{ $driver->id }}/multas" class="badge badge--primary">Ver multas</a>
                                      <a href="/choferes/{{ $driver->id }}/multas/create" class="badge badge--success">Añadir Multa</a>
                                  </td>
                                  {{-- <td>{{ $driver->observation }}</td> --}}
                                  <td>
                                      <a href="/choferes/{{ $driver->id}}" class="badge badge--default">Ver Perfil</a>
                                      <a href="/choferes/{{ $driver->id }}/edit" class="badge badge--info">Editar</a>
                                      <a href="/choferes/{{ $driver->id }}/delete" class="badge badge--danger">Eliminar</a>
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
                        <div class="alert alert--warning">
                            Por el momento aún no hay registro de choferes.
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
