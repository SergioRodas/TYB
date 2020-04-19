<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class UserController extends Controller
{
  public function perfil()
  {
    $usuarioLog = Auth::user();
    $correctas = $usuarioLog->respCorrectas;
    $incorrectas = $usuarioLog->respIncorrectas;
    $total = intval($correctas) + intval($incorrectas);
    if ($total == 0) {
      $porcentajeAciertos = 0;
    }else {
      $porcentajeAciertos = $correctas * 100 / $total;
    }
    $vac = compact('porcentajeAciertos');

    if ($usuarioLog==null)
    {
      return redirect('home');
    }
    return view('perfil', $vac);

  }
  public function traerStats() {
    $datosUsuario = Auth::User();
    return $datosUsuario;
 }
 public function ranking(){
   $usuarios = User::All()->sortByDesc('respCorrectas');
    $puestosRank = 1;
   return view('ranking', compact('usuarios','puestosRank'));
 }

}
