@extends('layouts.admin.layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="content-box-large">
                <h1 class="page-header">Multas de Chofer: {{ $driver->name }} {{ $driver->lastname }} </h1>
                <div class="panel-body">
                    @if (session('notification'))
                        <div class="alert alert-success">
                            {{ session('notification') }}
                        </div>
                    @endif
                    @if (!$tickets->isEmpty())
                        <table class="table table-bordered">
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
                                      <a href="/choferes/multas/{{ $ticket->id }}/edit" class="badge badge-info">Editar</a>
                                      <a href="/choferes/multas/{{ $ticket->id }}/delete" class="badge badge-danger">Eliminar</a>
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
                        <div class="alert alert-warning">
                            Por el momento aún no hay registro de multas para este chofer.
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection
