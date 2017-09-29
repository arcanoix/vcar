@extends('layouts.admin.layout')

@section('content')
    <div class="row">
        <div class="col-xs col-sm-8 col-md-8 col-lg-8 col-xl-8">
            <h5 class="breadcrumb__title">Todos los Clientes</h5>
            <nav class="breadcrumb">
                <a class="breadcrumb__item" href="/">Dashboard</a>
                <span class="breadcrumb__item active">Clientes</span></nav>
        </div>
        <div class="col-xs col-sm-4 col-md-4 col-lg-4 col-xl-4">
           <div class="input-group  my-2 my-lg-0">
             <input class="form-control form-control-sm" type="text" placeholder="Search" aria-label="Buscar" id="client_data">
             <span class="input-group-btn">
                <button class="btn btn--info btn-flat" type="button" onclick="searchclient();" >Buscar</button>
             </span>
          </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-12">
            @include('layouts.admin.alerts')
        </div>
    </div>

      <div id="container-principal">
         <div id="container-clients">
            <div class="row">
               <div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-12">
                  <div class="card">
                     <div class="card__heading">
                        <h6 class="card__title">Clientes</h6>
                     </div>
                     <div class="card__body">
                    @if (!$clients->isEmpty())
                        <table class="table table--responsive thead--default undefined">
                          <thead>
                            <tr>
                              <th>Fecha</th>
                              <th>Nombre</th>
                              <th>E-mail</th>
                              <th>Teléfono</th>
                              <th>Cedula</th>
                              <th>Activo</th>
                              <th>Acciones</th>
                            </tr>
                          </thead>
                          <tbody>
                              @foreach ($clients as $client)
                                <tr>
                                  <td>{{ $client->created_at->format('d/m/Y') }}</td>
                                  <td>{{ $client->name }}</td>
                                  <td>{{ $client->email }}</td>
                                  <td>{{ $client->phone }}</td>
                                  <td>{{ $client->cedula }}</td>
                                  <td>
                                    @if ($client->active === 1)
                                       <form action="" method="post">
                                          {{ csrf_field() }}
                                          <input type="hidden" value="{{ $client->id }}" name="id">
                                          <input type="hidden" value="0" name="active" >
                                          <button class="badge badge--danger" type="submit">Desactivar</button>
                                       </form>
                                    @else
                                       <form action="" method="post">
                                          {{ csrf_field() }}
                                          <input type="hidden" value="{{ $client->id }}" name="id">
                                          <input type="hidden" value="1" name="active" >
                                          <button class="badge badge--success" type="submit">Activar</button>
                                       </form>
                                    @endif
                                  </td>
                                  <td>
                                      <a href="/clientes/{{ $client->id }}" class="badge badge--success">Perfil</a>
                                      <a href="/clientes/{{ $client->id }}/edit" class="badge badge--info">Editar</a>
                                      <a href="/clientes/{{ $client->id }}/delete" class="badge badge--danger">Eliminar</a>
                                  </td>
                                </tr>
                            @endforeach
                          </tbody>
                        </table>

                        <div class="col-12">
                            <div class="mt--4">
                                @if (count($clients))
                                    {{ $clients->links('pagination::bootstrap-4') }}
                                @endif
                            </div>
                        </div>
                    @else
                        <div class="alert alert-warning">
                            Por el momento aún no hay registro de clientes.
                        </div>
                    @endif
                </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
@endsection

@section('js')
   <script type="text/javascript">
   function searchclient(){
      var dato=$("#client_data").val();
      var url="search-client/"+dato+"";

      $("#container-principal").html($("#container-clients").html());
      $.get(url,function(resul){
           $("#container-principal").html(resul);
      })

      }
   </script>

@endsection
