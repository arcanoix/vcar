@extends('layouts.admin.layout')

@section('content')

    <div class="row">
        <div class="col-xs col-sm-8 col-md-8 col-lg-8 col-xl-8">
            <h5 class="breadcrumb__title">Todos los transportes</h5>
            <nav class="breadcrumb">
                <a class="breadcrumb__item" href="/">Dashboard</a>
                <span class="breadcrumb__item active">Transportes</span></nav>
        </div>

        <div class="col-xs col-sm-4 col-md-4 col-lg-4 col-xl-4">
           <div class="input-group  my-2 my-lg-0">
             <input class="form-control form-control-sm" type="text" placeholder="Search" aria-label="Buscar" id="transport_data">
             <span class="input-group-btn">
                <button class="btn btn--info btn-flat" type="button" onclick="searchtransport();" >Buscar</button>
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
       <div id="container-transports">
          <div class="row">
              <div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-12">
                  <div class="card">
                      <div class="card__heading">
                          <h6 class="card__title">Transportes</h6>
                      </div>
                      <div class="card__body">
                          @if (!$transports->isEmpty())
                              <table class="table table--responsive thead--default undefined">
                                <thead>
                                  <tr>
                                    <th>Nombre</th>
                                    <th>Marca</th>
                                    <th>Modelo</th>
                                    <th>Acciones</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($transports as $transport)
                                      <tr>
                                        <td>{{ $transport->name }}</td>
                                        <td>{{ $transport->brand }}</td>
                                        <td>{{ $transport->model }}</td>
                                        <td>
                                            <a href="/transportes/{{ $transport->id }}/edit" class="badge badge-info">Editar</a>
                                            <a href="/transportes/{{ $transport->id }}/delete" class="badge badge-danger">Eliminar</a>
                                        </td>
                                      </tr>
                                      @endforeach
                                </tbody>
                              </table>

                              <div class="col-12">
                                  <div class="mt--4">
                                      @if (count($transports))
                                          {{ $transports->links('pagination::bootstrap-4') }}
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
   function searchtransport(){
      var dato=$("#transport_data").val();
      var url="search-transport/"+dato+"";

      $("#container-principal").html($("#container-transports").html());
      $.get(url,function(resul){
           $("#container-principal").html(resul);
      })

      }
   </script>

@endsection
