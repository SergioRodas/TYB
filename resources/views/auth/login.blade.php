@extends('layouts.app')

@section('content')
  <div class="container">
      <section class="row contenedor justify-content-center pt-5">


          <div class="container col-lg-4 col-md-6 border rounded text-white login-caja px-4"
              style="background:rgba(186, 59, 59, 0.60);">
              <img class="position-absolute rounded-circle border border-dark d-block lobo" src="{{asset('img/logo.jpg')}}"
                  alt="logo de ejemplo" style="width: 100px; top: -50px; left: calc(50% - 50px);">
              <h4 class="text-center pt-5 pb-3 mt-2">Iniciar sesión</h4>
              <form method="POST" action="{{ route('login') }}">
                  @csrf
                                    <!-- EMAIL -->

                  <div class="row">
                      <label for="email" class="font-weight-bold p-o ml-3">{{ __('E-mail') }}</label>

                      <div class="col-12 form-group">
                          <input id="email" type="email"
                              class="w-100 mb-1 form-control @error('email') is-invalid @enderror" name="email"
                              placeholder="Ingresa tu correo electrónico" value="{{ old('email') }}" required
                              autocomplete="email" autofocus>

                          @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                      </div>
                  </div>

                                  <!-- PASSWORD -->

                  <div class="form-group row">
                      <label for="password" class="font-weight-bold p-o ml-3">{{ __('Contraseña') }}</label>

                      <div class="col-12 form-group">
                          <input id="password" type="password"
                              class="w-100 mb-1 form-control form-control @error('password') is-invalid @enderror"
                              placeholder="Ingresa tu contraseña" name="password" required autocomplete="current-password">

                          @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                      </div>
                  </div>

                            <!-- REMEMBER-ME -->

                  <div class="col-12 form-group">
                      <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="remember" id="remember"
                              {{ old('remember') ? 'checked' : '' }}>

                          <label class="font-weight-bold p-0 m-0" for="remember">
                              {{ __('Recordarme') }}
                          </label>
                      </div>
                  </div>

                          <!--BOTON DE ENVIAR-->

                  <input class="w-100 mb-3 bg-danger text-white border-0" style="height: 40px; font-size: 18px; border-radius: 20px;" type="submit" value="Iniciar sesión">

                          @if (Route::has('password.request'))
                          <a class="btn btn-link text-white float-right text-decoration-none" href="{{ route('password.request') }}">
                              {{ __('Olvidaste tu contraseña?') }}
                          </a>
                          @endif
                      </div>
              </form>
          </div>

      </section>
  </div>

{{--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>--}}
@endsection
