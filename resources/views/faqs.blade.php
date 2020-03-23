@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <!--BARRA DE NAVEGACIÓN -->


      <div class="container">
        <div class="row justify-content-center">
            <section class="col-sm-7 col-md-7 contenedor-texto px-5 mt-4 pb-5" style="background: url(/img/bg-166.jpg) center top; background-size:cover; border: black solid 2px;">
              <h1 class="text-center display-4 pb-3 mt-5 mb-4" style="font-family: serif; font-size: 3em; font-weight: bold; color:red;">Preguntas frecuentes</h1>

                <hr class="border">
                <details class="pb-4">
                  <summary>¿Cómo accedo a jugar?</summary>
                    <p class="font-italic">Creando una cuenta, haciendo click en el botón REGISTRARSE, completando el formulario y siguiendo los pasos de validación.</p>
                    <p class="font-italic">Si posee cuenta, haga click en el botón INGRESAR, complete con nombre de usuario y contraseña.</p>
                </details>
                <details class="pb-4">
                  <summary>¿Olvido su contraseña o cuenta bloqueada?</summary>
                    <p class="font-italic">Haga click en el botón INGRESAR, luego haga click en el enlace con la frase OLVIDASTE TU CONTRASEÑA? Y complete con su dirección de correo
                        E-mail, llegará a su casilla un código para validar nueva contraseña.
                    </p>
                </details>
                <details class="pb-4">
                  <summary>¿Puedo poseer más de una cuenta?</summary>
                    <p class="font-italic">Puede poseer un total de tres (3) cuentas como máximo, tener en cuenta que para que esto sea posible debe tener instalada la app GOOGLE PLAY.</p>
                </details>
                <details class="pb-4">
                  <summary>¿En algún momento debo pagar algo?</summary>
                    <p class="font-italic">El juego y sus actualizaciones son completamente gratuitos. Pero también contamos con una tienda, en donde se pueden comprar complementos visuales
                        y algunas mejoras que haran más entretenido el juego y su experiencia se volverá más gratificante.
                    </p>
                </details>
                <details class="pb-4">
                  <summary>Acerca de este juego.</summary>
                    <p class="font-italic">Demuestra tu habilidad y conocimiento, en este asombroso juego que desafia tu mente. Combinando el clasico juego de preguntas y respuestas con espectaculares
                        imagenes. Disfrutarás de un entorno super colorido, una ambientación futurista y una interfaz muy sencilla e intuitiva.

                <details class="pb-4">
                  <summary>El juego posee anuncios publicitarios.</summary>
                    <p class="font-italic">En algunos casos, los anuncios publicitarios, serán requizito para poder acceder a algunas caracteristicas especiales o a fases de bonus. Esto
                        se debe, en parte, a que la publicidad constitutye fuente de ingresos económicos para continuar desarrollando y mejorando el juego.</p>
                </details>

                <details class="pb-4">
                  <summary>Caracteristicas especiales.</summary>
                    <ul class="font-italic">
                        <li class="">Gana gemas para subir de nivel.</li>
                        <li class="">Colecciona reacciones y emotes divertidos.</li>
                        <li class="">Desbloquea niveles y personajes especiales.</li>
                        <li class="">Desafia amigos o adversarios online </li>
                    </ul>
                </details>
                <details>
                  <summary>Especificaciones técnicas.</summary>
                     <ul class="font-italic">
                        <li class="">VERSIÓN: 2.0.</li>
                        <li class="">ÚLTIMA ACTUALIZACION: 12 FEB. 2020.</li>
                        <li class="">LANZAMIENTO: 1 NOV. 2019.</li>
                    </ul>
                </details>

                <hr class="border">
            </section>

        </div>
      </div>


     </div>
</body>
</html>
@endsection
