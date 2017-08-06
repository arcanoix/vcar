@extends('layouts.admin.layout')

@section('css')
<link rel="stylesheet" href="{{ URL::asset('css/tempusdominus-bootstrap-4.min.css') }}">
@endsection

@section('content')
    <div class="row">
        <div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <h5 class="breadcrumb__title">Alta de Multa</h5>
            <nav class="breadcrumb">
                <a class="breadcrumb__item" href="/">Dashboard</a>
                <a class="breadcrumb__item" href="/choferes">Choferes</a>
                <span class="breadcrumb__item active">Alta de Multa</span></nav>
        </div>
    </div>
    <div class="row">
        <div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-12">
            @include('layouts.admin.alerts')
        </div>
    </div>
    <div class="row">
        <div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
            <div class="card">
                <div class="card__heading">
                    <h6 class="card__title">Información General</h6>
                </div>
                <div class="card__body">
                    <form class="form-horizontal" action="" method="post">
                        {{ csrf_field() }}
                        <div class="form__group row">
                            <label for="" class="col-2 col__form__label">Numero de Multa</label>
                            <div class="col-10">
                                <input class="form__control" type="text" name="number">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-2 col-form-label">Fecha de Multa</label>
                            <div class="col-10">
                                <div class="input-group date" id="date-ticket" data-target-input="nearest">
                                   <input type="text" class="form-control datetimepicker-input datetimepicker" data-target="#date-ticket" name="date" />
                                   <span class="input-group-addon" data-target="#date-ticket" data-toggle="datetimepicker">
                                       <span class="fa fa-calendar"></span>
                                   </span>
                               </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn--primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')
    <script src="{{ asset('js/vendors/moment.js') }}"></script>
    <script src="{{ asset('js/vendors/tempusdominus-bootstrap-4.min.js') }}"></script>
    <script type="text/javascript">
        $(function () {
            $('#date-ticket').datetimepicker({
                format: 'L'
            });
            $('.datetimepicker').datetimepicker({
                    format: 'L',
            });
        });
    </script>
@endsection
