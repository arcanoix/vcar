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
                        <h1 class="page-header">Usuarios</h1>
                        <div class="panel-body">

                                <table class="table table-bordered">
                                  <thead>
                                    <tr>

                                      <th>Usuario</th>
                                      <th>Correo</th>
                                      <th>Fecha</th>


                                    </tr>
                                  </thead>
                                  <tbody>
                                      @foreach ($user as $deliveryReport)
                                        <tr>


                                          <td>{{ $deliveryReport->name }}</td>
                                          <td>{{ $deliveryReport->email }}</td>
                                          <td>{{ $deliveryReport->created_at }}</td>

                                        </tr>
                                        @endforeach
                                  </tbody>
                                </table>


                        </div>
                    </div>
                </div>
            </div>
        </main>
      </div>
    </div>
  </body>
</html>
