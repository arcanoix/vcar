@extends('layouts.admin.layout')
@section('css')
<link rel="stylesheet" href="{{ URL::asset('css/tempusdominus-bootstrap-4.min.css') }}">
@endsection
@section('content')
    <div class="row">
        <div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <h5 class="breadcrumb__title">Alta de Mantenimiento</h5>
            <nav class="breadcrumb">
                <a class="breadcrumb__item" href="/">Dashboard</a>
                <a class="breadcrumb__item" href="/mantenimientos">Mantenimientos</a>
                <span class="breadcrumb__item active">Alta de Mantenimiento</span></nav>
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
                                <select class="js-example-basic-single form-control" name="transport_id" value={{old('transport_id')}}>
                                    @foreach ($transportSelects as $transportSelect)
                                        <option value="{{ $transportSelect->id }}">{{ $transportSelect->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-3 col-form-label">Tipo de Mantenimiento</label>
                            <div class="col-9">
                               <select class="js-example-basic-single form-control" name="name" value={{old('name')}}>
                                 <option value="Mantenimiento general">Mantenimiento general</option>
                                 <option value="Correa de tiempo">Correa de tiempo</option>
                                 <option value="Cambios de bujías">Cambios de bujías</option>
                                 <option value="Aceite">Aceite</option>
                                 <option value="Mecánica ligera">Mecánica ligera</option>
                                 <option value="Frenos">Frenos</option>
                                 <option value="Revisión completa">Revisión completa</option>
                                 <option value="Tren delantero">Tren delantero</option>
                               </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-3 col-form-label">Fecha de Mantenimiento</label>
                            <div class="col-9">
                                <div class="input-group date datetimepicker" id="last_check" data-target-input="nearest">
                                   <input type="text" class="form-control datetimepicker-input datetimepicker" data-target="#last_check" name="last_check" value={{old('last_check')}}/>
                                   <span class="input-group-addon" data-target="#last_check" data-toggle="datetimepicker">
                                       <span class="fa fa-calendar"></span>
                                   </span>
                               </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-3 col-form-label">KM en mantenimiento</label>
                            <div class="col-9">
                                <input class="form-control" type="text" name="last_km" value={{old('last_km')}}>
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
                                   <input type="text" class="form-control datetimepicker-input datetimepicker" data-target="#next_check" name="next_check" value={{old('next_check')}}/>
                                   <span class="input-group-addon" data-target="#next_check" data-toggle="datetimepicker">
                                       <span class="fa fa-calendar"></span>
                                   </span>
                               </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-3 col-form-label">KM Próxima revisión</label>
                            <div class="col-9">
                                <input class="form-control" type="text" name="next_km" value={{old('next_km')}} >
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
                        <textarea name="observation" rows="8" cols="80" class="form-control" value={{old('observation')}}></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn--primary">Guardar</button>
                <a href="/dashboard" class="btn btn--danger">Cancelar</a>
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
