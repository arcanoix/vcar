@extends('layouts.admin.layout')

@section('content')
    <div class="row">
        <div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <h5 class="breadcrumb__title">Alta de Choferes</h5>
            <nav class="breadcrumb">
                <a class="breadcrumb__item" href="/">Dashboard</a>
                <a class="breadcrumb__item" href="/clientes">Choferes</a>
                <span class="breadcrumb__item active">Alta de Chofer</span></nav>
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
                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form__group row">
                            <label for="" class="col-2 col__form__label">Nombre</label>
                            <div class="col-10">
                                <input class="form__control" type="text" name="name" >
                            </div>
                        </div>
                        <div class="form__group row">
                            <label for="" class="col-2 col__form__label">Apellido</label>
                            <div class="col-10">
                                <input class="form__control" type="text" name="lastname" >
                            </div>
                        </div>

                        <div class="form__group row">
                            <label for="" class="col-2 col__form__label">Licencia</label>
                            <div class="col-10">
                                <input type="file" class="form__control" name="licence">
                            </div>
                        </div>

                        <div class="form__group row">
                            <label for="" class="col-2 col__form__label">Certificado Médico</label>
                            <div class="col-10">
                                <input type="file" class="form__control" name="medical_certificate">
                            </div>
                        </div>


                        <div class="form__group row">
                            <label for="" class="col-2 col__form__label">Observaciones</label>
                            <div class="col-10">
                                <textarea class="form__control" name="observation" rows="8"></textarea>
                            </div>
                        </div>

                        <button type="submit" class="btn btn--primary">Guardar</button>
                        <a href="/dashboard" class="btn btn--danger">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
