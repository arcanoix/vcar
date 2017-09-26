@extends('layouts.admin.layout')

@section('content')
    <div class="row">
        <div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <h5 class="breadcrumb__title">Alta de clientes</h5>
            <nav class="breadcrumb">
                <a class="breadcrumb__item" href="/">Dashboard</a>
                <a class="breadcrumb__item" href="/clientes">Clientes</a>
                <span class="breadcrumb__item active">Alta de Cliente</span></nav>
        </div>
    </div>

    <div class="row">
        <div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-12">
            @include('layouts.admin.alerts')
        </div>
    </div>
    <div class="row">
        <div class="col-xs col-sm-6 col-md-6 col-lg-6 col-xl-6 ">
            <div class="card">
                <div class="card__heading">
                    <h6 class="card__title">Información General</h6>
                </div>
                <div class="card__body">
                    <form action="" method="post">
                        {{ csrf_field() }}

                        <div class="form__group row">
                            <label for="example-text-input" class="col-2 col__form__label">Empresa</label>
                            <div class="col-10">
                                <input class="form__control" type="text" name="name" value={{old('name')}}>
                            </div>
                        </div>
                        <div class="form__group row">
                            <label for="example-text-input" class="col-2 col__form__label">E-mail</label>
                            <div class="col-10">
                                <input class="form__control" type="text" name="email" value={{old('email')}}>
                            </div>
                        </div>
                        <div class="form__group row">
                            <label for="example-text-input" class="col-2 col__form__label">Teléfono</label>
                            <div class="col-10">
                                <input class="form__control" type="text" name="phone" value={{old('phone')}}>
                            </div>
                        </div>
                        <div class="form__group row">
                            <label for="example-text-input" class="col-2 col__form__label">Cedula</label>
                            <div class="col-10">
                                <input class="form__control" type="text" name="cedula" value={{old('celula')}}>
                            </div>
                        </div>
                        <div class="form__group row">
                            <label for="example-text-input" class="col-2 col__form__label">Direción</label>
                            <div class="col-10">
                                <input class="form__control" type="text" name="address" value={{old('address')}}>
                            </div>
                        </div>
                        <div class="form__group row">
                            <label for="example-text-input" class="col-2 col__form__label">Estado</label>
                            <div class="col-10">
                                <input class="form__control" type="text" name="state" value={{old('state')}}>
                            </div>
                        </div>
                        <div class="form__group row">
                            <label for="example-text-input" class="col-2 col__form__label">Ciudad</label>
                            <div class="col-10">
                                <input class="form__control" type="text" name="city" value={{old('city')}}>
                            </div>
                        </div>
                        <button class="btn btn--primary" type="submit">Guardar</button>
                        <a href="/dashboard" class="btn btn--danger">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
