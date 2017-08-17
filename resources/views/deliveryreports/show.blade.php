@extends('layouts.admin.layout')

@section('content')
    <div class="row">
        <div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <h5 class="breadcrumb__title">Información de Entrega; {{ $deliveryReport->id }}</h5>
            <nav class="breadcrumb">
                <a class="breadcrumb__item" href="/">Dashboard</a>
                <a class="breadcrumb__item" href="/entregas">Entregas</a>
                <span class="breadcrumb__item active">Perfil del entregas</span></nav>
        </div>
    </div>
    <div class="row">
        <div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-12">
            @include('layouts.admin.alerts')
        </div>
    </div>
    <div class="row">
        <div class="col-xs col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="card">
                <h6 class="card__heading">Información General</h6>
                <div class="card__body">
                    <h6 class="card__title">Cliente</h6>
                    <p class="card-text">{{ $deliveryReport->client->name }}</p>
                    <hr>
                    <h6 class="card__title">Fecha y Hora</h6>
                    <div class="d-flex flex-row dr-card-dates justify-content-center">
                        <div class="card card--inverse card--warning">
                            <div class="card-block">
                                <h6 class="card-title">Salida</h6>
                                <p class="card-text">{{ $deliveryReport->departure_date }}</p>
                            </div>
                        </div>

                        <div class="card card--inverse card--success">
                            <div class="card-block">
                                <h6 class="card-title">Llegada</h6>
                                <p class="card-text">{{ $deliveryReport->delivery_date }}</p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h6 class="card-title">Información de Destino</h6>
                    <div class="row dr-destination">
                        <div class="col-md-3 dr-destino-title">
                            Estado:
                        </div>
                        <div class="col-md-9">
                            {{ $deliveryReport->destination_state }}
                        </div>
                    </div>
                    <div class="row dr-destination">
                        <div class="col-md-3 dr-destino-title">
                            Ciudad:
                        </div>
                        <div class="col-md-9">
                            {{ $deliveryReport->destination_city }}
                        </div>
                    </div>
                    <div class="row dr-destination">
                        <div class="col-md-3 dr-destino-title">
                            Dirección:
                        </div>
                        <div class="col-md-9">
                            {{ $deliveryReport->destination_address }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xs col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="card">
                <h6 class="card__heading">Carga</h6>
                <div class="card__body">
                    <h6 class="card__title">Tipo de Carga</h6>
                    <p class="card-text">{{ $deliveryReport->load_type }}</p>
                    <hr>
                    <h6 class="card-title">Condición</h6>
                    <p class="card-text">{{ $deliveryReport->condition }}</p>
                </div>
            </div>

            <div class="card">
              <h6 class="card__heading">Información de Transporte</h6>
              <div class="card__body">
                <h6 class="card__title">Transporte</h6>
                <p class="card-text">{{ $deliveryReport->transport->name }}</p>
                <hr>
                <h6 class="card-title">Chofer</h6>
                <p class="card-text">{{ $deliveryReport->driver->name }}</p>
              </div>
            </div>
        </div>
    </div>

    <div class="row">
       <div class="col-md-12">
          <div class="card">
             <div class="card__heading">
                <h6 class="card__title">Mapa</h6>

             </div>
             <div class="card__body">
                {!! Mapper::renderJavascript() !!}

               <div class="map__location">
                  {!! Mapper::render() !!}
               </div>

               <hr>
               <input type="hidden" id="lat-js" value="{{ $deliveryReport->lat }}">
               <input type="hidden" id="lng-js" value="{{ $deliveryReport->lng }}">

               <div class="map__location__route">
                  <h6 class="card__title">Mapa de Ruta</h6>
                  <div id="map-canvas" style="height: 500px; width: 100%;"></div>
               </div>
             </div>
          </div>
       </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h4 class="card__heading">Incidencia</h4>
                <div class="card__body">
                    <h6 class="card__title"></h6>
                    @if ($deliveryReport->incident)
                        <p>{{ $deliveryReport->incident }}</p>
                    @else
                        <div class="alert alert-warning">
                            No hubo incidencias.
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>


@endsection

@section('js')
    <!-- JS Google Maps -->
    <script src="{{ asset('js/google-maps-custom.js') }}"></script>
    <script src="{{ asset('js/google-map-rutas.js') }}"></script>
@endsection
