@extends('layouts.admin.layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="content-box-large">
                <h1 class="page-header">Clientes</h1>
                <div class="panel-body">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Fecha</th>
                          <th>Nombre</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($clients as $client)
                            <tr>
                              <td>{{ $client->created_at->format('d/m/Y') }}</td>
                              <td>{{ $client->name }}</td>
                              <td></td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
