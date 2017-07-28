@extends('layouts.app')

@section('content')
    <div class="col">
        <div class="login-register-form d-flex justify-content-md-center align-items-center">
            <div class="col-md-4">
                <form method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <img src="img/logo.png" alt="" class="img-responsive">
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="Correo Electónico">

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input id="password" type="password" class="form-control" name="password" required placeholder="Contraseña">

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordar sessión
                                </label>
                            </div>
                    </div>

                    <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                Ingresar
                            </button>

                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                Recuperar contraseña
                            </a>
                    </div>

                  </form>
            </div>
        </div>
</div>
@endsection
