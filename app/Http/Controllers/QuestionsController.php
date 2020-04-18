<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;


class QuestionsController extends Controller
{
    public function faqs()
    {
      return view('faqs');

    }
    public function guardarPuntuacion(Request $request){
        $usuarioActual = Auth::user();
        $usuarioActual->respCorrectas= $request["cantRespuestasCorrectas"];
        $usuarioActual->respIncorrectas= $request["cantRespuestasIncorrectas"];
        $usuarioActual->save();

            return "Cantidad de respuestas correctas = $usuarioActual->respCorrectas <br>
            Cantidad de respuestas Incorrectas = $usuarioActual->respIncorrectas";
    }
    public function guardarRespondidas(Request $request){
        $usuarioActual = Auth::user();
        $usuarioActual->respondidas= $request["respondidasUsuario"];
        $usuarioActual->save();
    }

}
