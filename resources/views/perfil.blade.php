@extends('layouts.app')

@section('content')


<div class="container-fluid">
          <div class="container">
              <div class="row justify-content-center">

                  <div class="card col-md-4 col-sm-8 my-5" style="background: url(img/bg-117.jpg); border: solid 4px;">
                      <img class="card-img-top rounded-circle mt-3" style="align-self:center; width: 72%; height: 250px; border: #863c3c solid 4px;" src="{{file_exists(public_path('/storage/'.Auth::user()->avatar))?'/storage/'.Auth::user()->avatar:'images/usuariodefault.png'}}"{{-- {{Auth::user()->avatar!='no tiene'?'/storage/'.Auth::user()->avatar:'images/usuariodefault.png'}}" --}} alt="Card image cap">
                      <div class="card-body text-center" style="">
                          <h3 class="card-title" style="color:black; font-weight: bold;">{{Auth::user()->username}} </h3>
                          <p class="card-text my-4" style="font-size: 22px; font-weight: bold; color: black;">Porcentaje de aciertos: {{$porcentajeAciertos}}% <br> País: {{Auth::user()->pais!=null?Auth::user()->pais :"sin país registrado"}}</p>
                          <a href="/home" class="btn btn-danger">Ir a jugar!</a>
                      </div>
                  </div>
                  <div class="col-md-12 offset-1 ml-0 my-5" style="background:rgba(186, 59, 59, 0.60); border: solid 4px;">
                  <br>
                  <h4 id="cantRespuestas" class="text-white col-md-12 col-xs-12 py-3 mt-5 my-4 pl-5" style="font-family: serif; font-size: 2em;">
            </h4>

                  </div>
              </div>
          </div>
      </div>

@endsection
