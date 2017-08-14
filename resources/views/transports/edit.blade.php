@extends('layouts.admin.layout')

@section('content')
    <div class="row">
        <div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <h5 class="breadcrumb__title">Editar transporte</h5>
            <nav class="breadcrumb">
                <a class="breadcrumb__item" href="/">Dashboard</a>
                <a class="breadcrumb__item" href="/transporte">Transporte</a>
                <span class="breadcrumb__item active">Editar Transporte</span></nav>
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
                            <label for="" class="col-3 col__form__label">Nombre</label>
                            <div class="col-9">
                                <input class="form__control" type="text" name="name" value="{{ $transport->name }}">
                            </div>
                        </div>
                        <div class="form__group row">
                            <label for="" class="col-3 col__form__label">Marca</label>
                            <div class="col-9">
                                <input class="form__control" type="text" name="brand" value="{{ $transport->brand }}">
                            </div>
                        </div>
                        <div class="form__group row">
                            <label for="" class="col-3 col__form__label">Modelo</label>
                            <div class="col-9">
                                <input class="form__control" type="text" name="model" value="{{ $transport->model }}">
                            </div>
                        </div>
                        <button type="submit" class="btn btn--primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
