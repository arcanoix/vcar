@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="authentication">
                <form class="authentication__form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <img src="{{asset('img/logo.jpg')}}" alt="" class="img-fluid">

                    <div class="form__group has--feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="input__group--style">
                            <input id="email" type="email" name="email" class="form__control--style" value="{{ old('email') }}" placeholder="Correo Electrónico"  />
                            <span class="control--animation"></span>
                            <label class="label__control" for="inputStyleUser"></label><span class="input__group__addon"><i class="fa fa-user"></i></span>
                        </div>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>


                    <div class="form__group has--feedback {{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="input__group--style">
                            <input class="form__control--style" id="password" type="password" class="form-control" name="password" required placeholder="Contraseña"/>

                            <span class="control--animation"></span>
                            <label class="label__control" for="inputStylePassword"></label><span class="input__group__addon"><i class="fa fa-key"></i></span>
                        </div>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form__footer">
                        <div class="form__group">

                            <div class="form__check">
                              <div class="checkbox checkbox--primary">
                                <input class="check" type="checkbox" id="checkbox01" name="remember" {{ old('remember') ? 'checked' : '' }} >
                                <label for="checkbox01">Recordar session</label>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="form__btn">
                        <button class="btn btn--primary btn--round" type="submit">Ingresar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- <div class="col">
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
        </div> --}}
</div>
@endsection
