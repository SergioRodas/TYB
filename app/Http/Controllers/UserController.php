<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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

}
