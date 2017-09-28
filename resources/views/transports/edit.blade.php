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
        <div class="col-xs col-sm-6 col-md-6 col-lg-6 col-xl-6 ">
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
                               <select class="js-example-basic-single form-control" name="brand" value="{{ $transport->brand }}">
                                 <option value="{{ $transport->brand }}">{{ $transport->brand }}</option>
                                 <option value="Ford">Ford</option>
                                 <option value="GeneralMotors">GeneralMotors</option>
                                 <option value="Toyota">Toyota</option>
                                 <option value="Encava">Encava</option>
                                 <option value="Mack Trucks">Mack Trucks</option>
                                 <option value="Kenworth">Kenworth</option>
                                 <option value="Chevrolet">Chevrolet</option>
                               </select>
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

@section('js')
   <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
   <script type="text/javascript">
      $(document).ready(function() {
         $(".js-example-basic-single").select2();
      });
   </script>
@endsection
