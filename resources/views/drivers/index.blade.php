@extends('layouts.admin.layout')

@section('content')

    <div class="row">
        <div class="col-xs col-sm-8 col-md-8 col-lg-8 col-xl-8">
            <h5 class="breadcrumb__title">Todos los Choferes</h5>
            <nav class="breadcrumb">
                <a class="breadcrumb__item" href="/">Dashboard</a>
                <span class="breadcrumb__item active">Choferes</span></nav>
        </div>
        <div class="col-xs col-sm-4 col-md-4 col-lg-4 col-xl-4">
           <div class="input-group  my-2 my-lg-0">
             <input class="form-control form-control-sm" type="text" placeholder="Search" aria-label="Buscar" id="driver_data">
             <span class="input-group-btn">
                <button class="btn btn--info btn-flat" type="button" onclick="searchdriver();" >Buscar</button>
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
      <div id="container-driver">
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
      </div>
   </div>


@endsection


@section('js')
   <script type="text/javascript">
   function searchdriver(){
      var dato=$("#driver_data").val();
      var url="search-driver/"+dato+"";

      $("#container-principal").html($("#container-driver").html());
      $.get(url,function(resul){
           $("#container-principal").html(resul);
      })

      }
   </script>

@endsection
