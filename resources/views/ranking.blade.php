@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-7 col-md-10 contenedor-texto mt-4"
            style="background: url(/img/bg-166.jpg) center top; background-size:cover; border: black solid 2px;">

            @foreach ($usuarios as $usuario)
              <div class="my-4" style="background: linear-gradient(45deg, purple, transparent);">
                <h2 id="iconoRank{{$puestosRank}}" class="text-center"></h2>
                <h3 class="position-relative text-center" id="Rank{{$puestosRank}}" style="font-weight: bolder;"> {{$puestosRank++}}° Puesto - <img
                src="{{file_exists(public_path('/storage/'.$usuario->avatar))?'/storage/'.$usuario->avatar:'images/usuariodefault.png'}}" class="rounded-circle" alt=""
                    style="height: 70px; width:70px;border: solid 3px;"> </a>{{$usuario->name}} / {{$usuario->username}}
                    </h3>
                    <div class="row col-md-12 col-xs-6">
                        <h4 class="col-md-4 col-xs-6 text-white"
                            style="font-family: serif; font-size: 3em;font-weight:bold; background: #9B3CFF;border: double 20px;;text-decoration: underline white;margin: auto;">
                            <div class="col-md-4 col-xs-6 text-white"
                                style="font-family: serif; font-size: 1em;font-weight:bold;">
                                @if($usuario->respCorrectas == null || $usuario->respCorrectas == 0)
                                <h3> Respuestas Correctas: </h3>
                                {{"0"}}
                                @else
                                <h3> Respuestas Correctas: </h3>
                                {{$usuario->respCorrectas}}
                                @endif
                            </div>
                            <h4 class="col-md-4 col-xs-6 text-white"
                                style="font-family: serif; font-size: 3em;font-weight:bold; background: #FA7147;border: double 20px;;text-decoration: underline white;">
                                <div class="col-md-4 col-xs-6 text-white"
                                    style="font-family: serif; font-size: 1em;font-weight:bold;">
                                    @if($usuario->respIncorrectas == null || $usuario->respIncorrectas == 0)
                                    <h3> Respuestas Incorrectas: </h3>
                                    {{"0"}}
                                    @else
                                    <h3> Respuestas Incorrectas: </h3>
                                    {{$usuario->respIncorrectas}}
                                    @endif
                                </div>

                            </h4>
                    </div>
              </div>
              


            @endforeach

        </div>
    </div>
</div>






















@endsection
