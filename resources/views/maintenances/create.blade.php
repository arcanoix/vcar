@extends('layouts.admin.layout')
@section('css')
<link rel="stylesheet" href="{{ URL::asset('css/tempusdominus-bootstrap-4.min.css') }}">
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">Alta de Mantenimiento</h1>
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
                                    <label for="example-text-input" class="col-3 col-form-label">Transporte</label>
                                    <div class="col-9">
                                        <select class="js-example-basic-single form-control" name="transport_id">
                                            @foreach ($transportSelects as $transportSelect)
                                                <option value="{{ $transportSelect->id }}">{{ $transportSelect->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-3 col-form-label">Tipo de Mantenimiento</label>
                                    <div class="col-9">
                                        <input class="form-control" type="text" name="name" >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-3 col-form-label">Fecha de Mantenimiento</label>
                                    <div class="col-9">
                                        <div class="input-group date datetimepicker" id="last_check" data-target-input="nearest">
                                           <input type="text" class="form-control datetimepicker-input datetimepicker" data-target="#last_check" name="last_check"/>
                                           <span class="input-group-addon" data-target="#last_check" data-toggle="datetimepicker">
                                               <span class="fa fa-calendar"></span>
                                           </span>
                                       </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-3 col-form-label">KM en mantenimiento</label>
                                    <div class="col-9">
                                        <input class="form-control" type="text" name="last_km" >
                                    </div>
                                </div>

                            </div>
                        </div>

                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <h4 class="card-header">Información Furuta</h4>
                <div class="card-block">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-3 col-form-label">Próxima Revision</label>
                        <div class="col-9">
                            <div class="input-group date datetimepicker" id="next_check" data-target-input="nearest">
                               <input type="text" class="form-control datetimepicker-input datetimepicker" data-target="#next_check" name="next_check"/>
                               <span class="input-group-addon" data-target="#next_check" data-toggle="datetimepicker">
                                   <span class="fa fa-calendar"></span>
                               </span>
                           </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-3 col-form-label">KM Próxima revisión</label>
                        <div class="col-9">
                            <input class="form-control" type="text" name="next_km" >
                        </div>
                    </div>
                </div>
            </div>



        </div>

        <div class="col-md-12">
            <div class="card">
                <h4 class="card-header">Observación </h4>
                <div class="card-block">
                    <textarea name="observation" rows="8" cols="80" class="form-control"></textarea>
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
            $('.datetimepicker').datetimepicker({
                format: 'L'
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
          $(".js-example-basic-single").select2();
        });
    </script>
@endsection
