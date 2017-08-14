@extends('layouts.admin.layout')
@section('css')
<link rel="stylesheet" href="{{ URL::asset('css/tempusdominus-bootstrap-4.min.css') }}">
@endsection
@section('content')
    <div class="row">
        <div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <h5 class="breadcrumb__title">Editar Mantenimiento No. {{ $maintenance->id }}</h5>
            <nav class="breadcrumb">
                <a class="breadcrumb__item" href="/">Dashboard</a>
                <a class="breadcrumb__item" href="/mantenimientos">Mantenimientos</a>
                <span class="breadcrumb__item active">Editar Mantenimiento</span></nav>
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
                            <label for="example-text-input" class="col-3 col-form-label">Transporte</label>
                            <div class="col-9">
                                <select class="js-example-basic-single form-control" name="transport_id">
                                    <option value="{{ $maintenance->transport->id }}">{{ $maintenance->transport->name }}</option>
                                    @foreach ($transportSelects as $transportSelect)
                                        <option value="{{ $transportSelect->id }}">{{ $transportSelect->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-3 col-form-label">Tipo de Mantenimiento</label>
                            <div class="col-9">
                                <input class="form-control" type="text" name="name" value="{{ $maintenance->name }}" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-3 col-form-label">Fecha de Mantenimiento</label>
                            <div class="col-9">
                                <div class="input-group date datetimepicker" id="last_check" data-target-input="nearest">
                                   <input type="text" class="form-control datetimepicker-input datetimepicker" data-target="#last_check" name="last_check" value="{{ $maintenance->last_check }}"/>
                                   <span class="input-group-addon" data-target="#last_check" data-toggle="datetimepicker">
                                       <span class="fa fa-calendar"></span>
                                   </span>
                               </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-3 col-form-label">KM en mantenimiento</label>
                            <div class="col-9">
                                <input class="form-control" type="text" name="last_km" value="{{ $maintenance->last_km }}" >
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <div class="col-xs col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
                <div class="card">
                    <div class="card__heading">
                        <h6 class="card__title">Información Futura</h6>
                    </div>
                    <div class="card__body">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-3 col-form-label">Próxima Revision</label>
                            <div class="col-9">
                                <div class="input-group date datetimepicker" id="next_check" data-target-input="nearest">
                                   <input type="text" class="form-control datetimepicker-input datetimepicker2" data-target="#next_check" name="next_check" value="{{ $maintenance->next_check }}"/>
                                   <span class="input-group-addon" data-target="#next_check" data-toggle="datetimepicker">
                                       <span class="fa fa-calendar"></span>
                                   </span>
                               </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-3 col-form-label">KM Próxima revisión</label>
                            <div class="col-9">
                                <input class="form-control" type="text" name="next_km" value="{{ $maintenance->next_km }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card__heading">
                        <h6 class="card__title">Observación</h6>
                    </div>

                    <div class="card__body">
                        <textarea name="observation" rows="8" cols="80" class="form-control">{{ $maintenance->observation }}</textarea>
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
            $('.datetimepicker').datetimepicker({
                    defaultDate: "{{ $maintenance->last_check }}",
                    format: 'L',
            });
            $('.datetimepicker2').datetimepicker({
                    defaultDate: "{{ $maintenance->next_check }}",
                    format: 'L',
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
          $(".js-example-basic-single").select2();
        });
    </script>
@endsection
