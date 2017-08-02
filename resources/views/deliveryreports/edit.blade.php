@extends('layouts.admin.layout')
@section('css')
<link rel="stylesheet" href="{{ URL::asset('css/tempusdominus-bootstrap-4.min.css') }}">
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">Editar Entrega: No.{{ $deliveryReport->id }}</h1>
            @include('layouts.admin.alerts')
        </div>

        <div class="col-md-6">
            <div class="content-box-large">
                <div class="panel-body">
                    <form class="form-horizontal" action="" method="post">
                        {{ csrf_field() }}
                        <div class="card">
                            <h4 class="card-header">Información General </h4>
                            <div class="card-block">
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-3 col-form-label">Cliente</label>
                                    <div class="col-9">
                                        <select class="js-example-basic-single form-control" name="client_id">
                                            <option value="{{ $deliveryReport->client->id }}">{{ $deliveryReport->client->name }}</option>
                                            @foreach ($clientsSelects as $clientsSelect)
                                                <option value="{{ $clientsSelect->id }}">{{ $clientsSelect->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-3 col-form-label">Fecha de Salida</label>
                                    <div class="col-9">
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
                                    <label for="example-text-input" class="col-3 col-form-label">Fecha de Llegada</label>
                                    <div class="col-9">
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

                        <div class="card">
                            <h4 class="card-header">Información Destino</h4>
                            <div class="card-block">
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-3 col-form-label">Estado</label>
                                    <div class="col-9">
                                        <input class="form-control" type="text" name="destination_state" value="{{ $deliveryReport->destination_state }}" >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-3 col-form-label">Ciudad</label>
                                    <div class="col-9">
                                        <input class="form-control" type="text" name="destination_city" value="{{ $deliveryReport->destination_city }}" >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-3 col-form-label">Dirección</label>
                                    <div class="col-9">
                                        <input class="form-control" type="text" name="destination_address" value="{{ $deliveryReport->destination_address }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <h4 class="card-header">Información Carga</h4>
                <div class="card-block">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-3 col-form-label">Tipo de Carga</label>
                        <div class="col-9">
                            <input class="form-control" type="text" name="load_type" value="{{ $deliveryReport->load_type }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-3 col-form-label">Condición</label>
                        <div class="col-9">
                            <input class="form-control" type="text" name="condition"  value="{{ $deliveryReport->condition }}">
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <h4 class="card-header">Información de Transporte </h4>
                <div class="card-block">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-3 col-form-label">Transporte</label>
                        <div class="col-9">
                            <select class="js-example-basic-single form-control" name="transport_id">
                                    <option value="{{ $deliveryReport->transport->id }}">{{ $deliveryReport->transport->name }}</option>
                                @foreach ($transportSelects as $transportSelect)
                                    <option value="{{ $transportSelect->id }}">{{ $transportSelect->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-3 col-form-label">Chofer</label>
                        <div class="col-9">
                            <select class="js-example-basic-single form-control" name="driver_id">
                                    <option value="{{ $deliveryReport->driver->id }}">{{ $deliveryReport->driver->name }} {{ $deliveryReport->driver->lastname }}</option>
                                @foreach ($driverSelects as $driverSelect)
                                    <option value="{{ $driverSelect->id }}">{{ $driverSelect->name }} {{ $driverSelect->lastname }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>

    </div>

@endsection

@section('js')
    <script src="{{ asset('js/moment.js') }}"></script>
    <script src="{{ asset('js/tempusdominus-bootstrap-4.min.js') }}"></script>
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
