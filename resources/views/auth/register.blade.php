@extends('layouts.inicio')

@section('content')

<div class="px-5 mx-4">
    <section class="row justify-content-center contenedor-formulario pt-5">
        <div class="col-lg-6 col-md-8 border border-dark text-white formulario-registro mx-auto"
            style="background:rgba(186, 59, 59, 0.60);">
            <img class="position-absolute border border-dark rounded-circle d-block lobo"
                src="{{ asset('img/logo.jpg') }}" alt="logo de ejemplo"
                style="width: 120px; top: -50px; left: calc(50% - 50px);">
            <h2 class="text-center pt-4 mt-5">Registrarse</h2>
            <form id="formulario" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf
                <!--NOMBRE-->

                <div class="form-group floating-label-form-group controls mx-4">
                    <label for="name" class="font-weight-bold">{{ __('Nombre') }}</label>

                    <input id="name" type="text"
                        class="w-100 mb-1 form-control form-control @error('name') is-invalid @enderror" name="name"
                        autocomplete="name" autofocus placeholder="Escriba aquí su nombre">

                </div>
                <!--NOMBRE DE USUARIO-->

                <div class="form-group floating-label-form-group controls mx-4">
                    <label for="username" class="font-weight-bold">{{ __('Nombre de Usuario') }}</label>

                    <input id="username" type="text"
                        class="w-100 mb-1 form-control form-control @error('username') is-invalid @enderror"
                        name="username" autocomplete="username" autofocus placeholder="Escriba un nombre de usuario">

                </div>

                <!--CORREO ELECTRÓNICO-->

                <div class="form-group floating-label-form-group controls mx-4">
                    <label for="email" class="font-weight-bold">{{ __('Email') }}</label>

                    <input id="email" type="text"
                        class="w-100 mb-1 form-control form-control @error('email') is-invalid @enderror" name="email"
                        autocomplete="email" autofocus placeholder="Escriba aquí su correo electrónico">

                </div>

                <div class="form-group">
                    <!--PAÍS-->
                    <div class="form-group floating-label-form-group controls mx-4">
                        <label for="pais" class="font-weight-bold">País:</label>
                        <select name="pais" class="col-lg-12 md-12 xs-12 text-white" style="background: #c44545;">
                            <option value="false">--</option>
                        </select>
                        
                    </div>
                    <div class="form-group floating-label-form-group controls mx-4">
                    <label for="provincia" class="font-weight-bold">
                        <select name="provincia" class="col-lg-12 md-12 xs-12 text-white" id="provincia" style="background: #c44545;">
                        
                        </select>
                    </label>
                    </div>
                </div>

                <!--CONTRASEÑA-->

                <div class="form-group floating-label-form-group controls mx-4">
                    <label for="password" class="font-weight-bold">{{ __('Contraseña') }}</label>

                    <input id="password" type="password"
                        class="w-100 mb-1 form-control form-control @error('password') is-invalid @enderror"
                        name="password" autocomplete="password" autofocus placeholder="Escriba una contraseña">

                </div>

                <!--CONFIRMAR CONTRASEÑA-->

                <div class="form-group floating-label-form-group controls mx-4">
                    <label for="password-confirm" class="font-weight-bold">{{ __('Confirmar contraseña') }}</label>

                    <input id="password-confirm" type="password" class="w-100 mb-1 form-control form-control"
                        name="password_confirmation" autocomplete="new-password"
                        placeholder="Vuelva a escribir la contraseña">
                    </input>
                </div>

                <!--FOTO DE PERFIL-->

                <div class="form-group">
                    <div class="form-group floating-label-form-group controls mx-4">
                        <label for="avatar" class="font-weight-bold">Imagen de perfil: </label>
                        <div class="add-new-img first" id="add-img">
                            <span><i class="icon-camera"></i></span>
                        </div>
                        <input id="add-new-img" class="mt-3" type="file" name="avatar">
                    </div>
                </div>
                


                <div class="form-group mx-auto pb-2">

                    <button type="submit" class="btn rounded ml-4 mt-4 text-white bg-danger px-4 pt-1"
                        style="font-size:20px;" id="sendMessageButton">
                        {{ __('Registrar') }}
                    </button>
                </div>
                <a class="help-block Iniciar-sesión float-right text-decoration-none mb-4 text-white"
                    href="{{ route('login') }}"> Ya tienes una cuenta? Inicia sesión</a>

            </form>
        </div>
    </section>
</div>

@endsection
