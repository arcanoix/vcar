@extends('layouts.admin.layout')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="content-box-large">
                <h1 class="page-header">Alta de Chofer</h1>
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <p> {{ $error }}</p>
                            @endforeach
                        </div>
                    @endif

                    @if (session('notification'))
                        <div class="alert alert-success">
                            {{ session('notification') }}
                        </div>
                    @endif
                    <form class="form-horizontal" action="" method="post">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="example-text-input" class="col-3 col-form-label">Nombre</label>
                            <div class="col-9">
                                <input class="form-control" type="text" name="name" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-3 col-form-label">Apellido</label>
                            <div class="col-9">
                                <input class="form-control" type="text" name="lastname" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-3 col-form-label">Licencia</label>
                            <div class="col-9">
                                <label class="custom-file d-block" id="licencia">
                                    <input type="file" class="custom-file-input" aria-describedby="fileHelp" name="licencia">
                                    <span class="custom-file-control form-control-file"></span>
                                </label>
                            </div>

                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-3 col-form-label">Certificado Médico</label>
                            <div class="col-9">
                                <label class="custom-file d-block" id="certificado">
                                    <input type="file" class="custom-file-input" aria-describedby="fileHelp" name="certificado">
                                    <span class="custom-file-control form-control-file"></span>
                                </label>
                            </div>

                        </div>


                        <div class="form-group row">
                            <label for="example-text-input" class="col-3 col-form-label">Observaciones</label>
                            <div class="col-9">
                                <textarea class="form-control" name="observation" rows="3"></textarea>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
