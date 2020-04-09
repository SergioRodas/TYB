
                @extends('layouts.inicio')

                @section('content')



          <section class="row rounded pt-4">
            <article class="col-12 pt-5 pb-4" style="text-align: -webkit-center;">
              <h1 class="col-md-6 col-xs-12 py-3 mt-5" style="color:white; font-family: serif; font-size: 3em;font-weight:bold; background:crimson; opacity:90%">Demuestra tu conocimiento</h1>
              <hr class="col-7 border">
            </article>

            @foreach (App\Categoria::all() as $categoria) {{--categorias--}}

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
                    <div class="row modal-body mb-5">
                      <div class="container border rounded px-4 py-4">
                        {{$categoria->descripcion}}
                      </div>
                      @foreach ($categoria->preguntas->shuffle() as $pregunta){{--preguntas--}}
                      <p class="mt-4 mx-5">{{$pregunta->detalle}}</p>
                      @foreach ($pregunta->respuestas->shuffle() as $respuesta){{--respuestas--}}
                        <div id="respuestasPorCat" class="col-10 my-2">
                          <button type="button" id="{{$respuesta->pregunta->categoria->id}}{{$respuesta->id}}-{{$respuesta->is_correct}}" name="{{$respuesta->pregunta_id}}{{$respuesta->is_correct}}" class="opciones text-white px-3 py-2 ml-5" style="background-color:rebeccapurple; border-radius: 91px 91px 91px 91px;">{{ $respuesta->detalle }}</button>
                          <p class="text-center pt-2" name="{{$respuesta->pregunta->categoria->id}}{{$respuesta->id}}-{{$respuesta->is_correct}}" style="float: right;"></p>
                        </div>
                      @endforeach
                      @endforeach

                    </div>
                  </div>
                </div>
              </div>

            @endforeach
            <p id="cantRespuestas" class="card-text my-4 text-white pl-5" style="font-size: 22px; font-weight: bold; color: black;">
            </p>

      </section>

@endsection
