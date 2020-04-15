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
    if ($usuarioLog==null)
    {
      return redirect('home');
    }
    return view('perfil');

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
