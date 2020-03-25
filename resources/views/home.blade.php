
                @extends('layouts.inicio')

                @section('content')



          <section class="row rounded pt-4">
            <article class="col-12 pt-5 pb-4" style="text-align: -webkit-center;">
              <h1 class="col-md-6 col-xs-12 py-3 mt-5" style="color:white; font-family: serif; font-size: 3em;font-weight:bold; background:crimson; opacity:90%">Demuestra tu conocimiento</h1>
              <hr class="col-7 border">
            </article>
            @foreach (App\Categoria::all() as $categoria)

            <div class="col-sm-6 col-md-4 p-5 d-flex"><a href="#" data-toggle="modal" data-target="#{{$categoria->getNombreSinEspacios()}}Modal" class="w-100"><img class="img-fluid rounded w-100 h-100 img-hov" src="{{$categoria->imagen}}" alt="" style="box-shadow: 10px 10px 6px -6px #777;"></a></div>

            <div class="modal fade" id="{{$categoria->getNombreSinEspacios()}}Modal" tabindex="-1" role="dialog" aria-labelledby="{{$categoria->getNombreSinEspacios()}}ModalTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content text-white border border-dark" style="background: url(/img/bg-172.jpg);">
                    <div class="modal-header" style="align-self:center;">
                      <h5 class="modal-title" id="{{$categoria->getNombreSinEspacios()}}ModalTitle" style="font-family: fantasy;">{{$categoria->nombre}}</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <img class="img-fluid border border-dark rounded mx-1" src="{{$categoria->imagen}}" alt="">
                    <div class="modal-body mb-5">
                      <div class="container border rounded px-4 py-4">
                        {{$categoria->descripcion}}
                      </div>
                      @foreach ($categoria->preguntas->shuffle() as $pregunta)
                      <p class="mt-4 mx-5">{{$pregunta->detalle}}</p>
                      @foreach ($pregunta->respuestas->shuffle() as $respuesta)
                        <div id="respuestasCat" class="ml-5 my-4">
                          <button type="button" id="respuesta{{$respuesta->id}}-{{$respuesta->is_correct}}" class="opciones btn btn-outline-light ml-5 text-white bg-danger" {{--style="background-color:rebeccapurple;" /indigo--}}>{{ $respuesta->detalle }}</button>
                        </div>
                      @endforeach
                      @endforeach

                    </div>
                  </div>
                </div>
              </div>

            @endforeach

            @guest
          <div class="container" style="padding-top:7%;margin-bottom: 7%;">
            <div class="card-deck text-center">
              <div class="card shadow-sm">
                <div class="card-header">
                  <h4>Estás registrado?</h4>
                </div>
                <div class="card-body">
                  <h2 class="card-title pricing-card-title m-5">Entrá a tu cuenta y Jugá!</h2>
                  <a class="btn text-white p-3 m3 col-md-10 cBT" style="background-color: crimson; font-size:16px;" href="Log-in.php">Ingresar!</a>
                </div>
              </div>
              <div class="card shadow-sm">
                <div class="card-header" style="padding-bottom: 20px;">
                  <h4 class="my-0">No estás registrado?</h4>
                </div>
                <div class="card-body">
                  <h2 class="card-title pricing-card-title m-5">Creá tu cuenta gratis! </h2>
                  <a class="btn text-white p-3 mr-3 col-md-12 cBT" style="background-color: crimson; font-size:16px;" href="Registro.php">Registrarse!</a>
                </div>
              </div>
            </div>
          </div>

        @endguest
      </section>


{{--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>--}}
@endsection
