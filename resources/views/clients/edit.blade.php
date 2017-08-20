@extends('layouts.admin.layout')

@section('content')
    <div class="row">
        <div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <h5 class="breadcrumb__title">Editar cliente</h5>
            <nav class="breadcrumb">
                <a class="breadcrumb__item" href="/">Dashboard</a>
                <a class="breadcrumb__item" href="/clientes">Clientes</a>
                <span class="breadcrumb__item active">Editar Cliente</span></nav>
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
                            <label for="" class="col-2 col__form__label">Empresa</label>
                            <div class="col-10">
                                <input class="form__control" type="text" name="name" value="{{ $client->name }}">
                            </div>
                        </div>
                        <div class="form__group row">
                            <label for="" class="col-2 col__form__label">E-mail</label>
                            <div class="col-10">
                                <input class="form__control" type="text" name="email" value="{{ $client->email }}">
                            </div>
                        </div>
                        <div class="form__group row">
                            <label for="" class="col-2 col__form__label">Teléfono</label>
                            <div class="col-10">
                                <input class="form__control" type="text" name="phone" value="{{ $client->phone }}">
                            </div>
                        </div>
                        <div class="form__group row">
                            <label for="" class="col-2 col__form__label">Cedula</label>
                            <div class="col-10">
                                <input class="form__control" type="text" name="cedula" value="{{ $client->cedula }}">
                            </div>
                        </div>
                        <div class="form__group row">
                            <label for="example-text-input" class="col-2 col__form__label">Direción</label>
                            <div class="col-10">
                                <input class="form__control" type="text" name="address" value="{{ $client->address }}">
                            </div>
                        </div>
                        <div class="form__group row">
                            <label for="example-text-input" class="col-2 col__form__label">Estado</label>
                            <div class="col-10">
                                <input class="form__control" type="text" name="state" value="{{ $client->state }}">
                            </div>
                        </div>
                        <div class="form__group row">
                            <label for="example-text-input" class="col-2 col__form__label">Ciudad</label>
                            <div class="col-10">
                                <input class="form__control" type="text" name="city" value="{{ $client->city }}">
                            </div>
                        </div>
                        <button type="submit" class="btn btn--primary">Guardar</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
