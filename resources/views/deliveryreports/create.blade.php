@extends('layouts.admin.layout')
@section('css')
<link rel="stylesheet" href="{{ URL::asset('css/tempusdominus-bootstrap-4.min.css') }}">
@endsection
@section('content')
    <div class="row">
        <div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <h5 class="breadcrumb__title">Alta de Entrega</h5>
            <nav class="breadcrumb">
                <a class="breadcrumb__item" href="/">Dashboard</a>
                <a class="breadcrumb__item" href="/entregas">Entregas</a>
                <span class="breadcrumb__item active">Alta de Entrega</span></nav>
        </div>
    </div>

    <div class="row">
        <div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-12">
            @include('layouts.admin.alerts')
        </div>
    </div>
    <form class="form-horizontal" action="" method="post">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-xs col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
                <div class="card">
                    <div class="card__heading">
                        <h6 class="card__title">Información General</h6>
                    </div>
                    <div class="card__body">

                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">Cliente</label>
                                <div class="col-10">
                                    <select class="js-example-basic-single form-control" name="client_id">
                                        @foreach ($clientsSelects as $clientsSelect)
                                            <option value="{{ $clientsSelect->id }}">{{ $clientsSelect->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">Fecha de Salida</label>
                                <div class="col-10">
                                    <div class="input-group date" id="departure_date" data-target-input="nearest">
                                       <input type="text" class="form-control datetimepicker-input datetimepicker" data-target="#departure_date" name="departure_date"/>
                                       <span class="input-group-addon" data-target="#departure_date" data-toggle="datetimepicker">
                                           <span class="fa fa-calendar"></span>
                                       </span>
                                   </div>
                                    {{-- <input class="form-control" type="datetime-local" name="departure_date"> --}}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">Fecha de Llegada</label>
                                <div class="col-10">
                                    <div class="input-group date" id="delivery_date" data-target-input="nearest">
                                       <input type="text" class="form-control datetimepicker-input datetimepicker" data-target="#delivery_date" name="delivery_date"/>
                                       <span class="input-group-addon" data-target="#delivery_date" data-toggle="datetimepicker">
                                           <span class="fa fa-calendar"></span>
                                       </span>
                                   </div>
                                    {{-- <input class="form-control" type="datetime-local" name="delivery_date"> --}}
                                </div>
                            </div>
                    </div>
                </div>
            </div>

            <div class="col-xs col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
                <div class="card">
                    <div class="card__heading">
                        <h6 class="card__title">Información Destino</h6>
                    </div>
                    <div class="card__body">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-2 col-form-label">Estado</label>
                            <div class="col-10">
                                <input class="form-control" type="text" name="destination_state" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-2 col-form-label">Ciudad</label>
                            <div class="col-10">
                                <input class="form-control" type="text" name="destination_city" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-2 col-form-label">Dirección</label>
                            <div class="col-10">
                                <input class="form-control" type="text" name="destination_address" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="row"> --}}
            <div class="col-xs col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
                <div class="card">
                    <div class="card__heading">
                        <h6 class="card__title">Información de Carga</h6>
                    </div>
                    <div class="card__body">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-2 col-form-label">Tipo de Carga</label>
                            <div class="col-10">
                                <input class="form-control" type="text" name="load_type" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-2 col-form-label">Condición</label>
                            <div class="col-10">
                                <input class="form-control" type="text" name="condition" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- </div> --}}

            {{-- <div class="row"> --}}
            <div class="col-xs col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
                <div class="card">
                    <div class="card__heading">
                        <h6 class="card__title">Información de Transporte</h6>
                    </div>
                    <div class="card__body">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-2 col-form-label">Transporte</label>
                            <div class="col-10">
                                <select class="js-example-basic-single form-control" name="transport_id">
                                    @foreach ($transportSelects as $transportSelect)
                                        <option value="{{ $transportSelect->id }}">{{ $transportSelect->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-2 col-form-label">Chofer</label>
                            <div class="col-10">
                                <select class="js-example-basic-single form-control" name="driver_id">
                                    @foreach ($driverSelects as $driverSelect)
                                        <option value="{{ $driverSelect->id }}">{{ $driverSelect->name }} {{ $driverSelect->lastname }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- </div> --}}
        </div>

        <div class="row">
            <div class="col-xs col-sm-12 col-md-6 col-lg-12 col-xl-12 ">
                <div class="card">
                    <div class="card__heading">
                        <h6 class="card__title">Incidencia</h6>
                    </div>
                    <div class="card__body">
                        <p>Detalle la incidencia..</p>
                        <textarea name="incident" rows="8" cols="80" class="form-control"></textarea>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn--primary">Guardar</button>
            </div>
        </div>
    </form>

@endsection

@section('js')
    <script src="{{ asset('js/vendors/moment.js') }}"></script>
    <script src="{{ asset('js/vendors/tempusdominus-bootstrap-4.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $('.datetimepicker').datetimepicker();
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
          $(".js-example-basic-single").select2();
        });
    </script>
@endsection
