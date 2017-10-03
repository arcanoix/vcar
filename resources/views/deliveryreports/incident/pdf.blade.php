<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Vimocar PDF</title>

    <!-- Bootstrap CSS -->
    <link href="css/pdf.css" rel="stylesheet">
  </head>

  <body>
    <div class="container-fluid">
      <div class="row">
        <main class="col-sm-12 pt-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="content-box-large">
                        <h1 class="page-header">Seguimiento de Incidencias</h1>
                        <div class="panel-body">
                            @if (!$deliveryReports->isEmpty())
                                <table class="table table-bordered">
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
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </main>
      </div>
    </div>
  </body>
</html>



    <div class="row">
        <div class="col-md-12">
            <div class="content-box-large">
                <h1 class="page-header">Seguimiento de Incidencias</h1>
                <div class="panel-body">
                    @if (!$deliveryReports->isEmpty())
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>Cliente</th>
                              <th>Trasporte</th>
                              <th>Chofer</th>
                              <th>Incidencia</th>
                              {{-- <th>Fecha y hora de salida</th>
                              <th>Fecha y hora de llegada</th> --}}
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
                                  {{-- <td>{{ $deliveryReport->departure_date }}</td>
                                  <td>{{ $deliveryReport->delivery_date }}</td>
                                  <td>
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
                    @endif

                </div>
            </div>
        </div>
    </div>
