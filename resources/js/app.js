/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});


function traerRespondidas() {
  //Esta función trae las opciones respondidas por los usuarios y las agrega en una variable de LocalStorage,
  //Si no jugaron aún, define la variable vacía. Esto nos permite poder deshabilitar las opciones ya respondidas
    $.ajaxSetup({
        headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
    $.ajax({
    url: '/userStats',
    type: 'GET',
    success: function(res) {
         var datosUsuario = Object.values(res);
         var respondidasUsuario = datosUsuario[8];
          if (respondidasUsuario==null) {
            //Seteamos los valores de respuestas correctas e incorrectas con LocalStorage, ambas variables = 0.
            var respondidas = "";
            localStorage.setItem('respondidasUsuario', respondidas);
          }else {
            //Seteamos las variables en LocalStorage con los valores traidos de la base de datos.
            localStorage.setItem('respondidasUsuario', respondidasUsuario);
          }
          deshabilitarRespondidas();
      }
})
}

function  guardarRespondidas() {

  //Esta función guarda las id de las respuestas del usuario en la base de datos.

  var respondidasAGuardar =  localStorage.getItem('respondidasUsuario');
    $.ajaxSetup({
       headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
     });
    $.ajax({
      "method": "POST",
      "url": "/respondidas",
      "data": {respondidasUsuario:respondidasAGuardar}
    }).done( function ( info ){

    });
  }

function traerStats() {
  //Esta función trae las puntuaciones de los usuarios y las agrega en una variable de LocalStorage,
  //Si no jugaron aún, define la puntuación = 0.
    $.ajaxSetup({
        headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
    $.ajax({
    url: '/userStats',
    type: 'GET',
    success: function(res) {
         var datosUsuario = Object.values(res);
         var respuestasCorrectasDB = datosUsuario[6];
         var respuestasIncorrectasDB = datosUsuario[7];
          if (respuestasCorrectasDB==null || respuestasIncorrectasDB==null) {
            //Seteamos los valores de respuestas correctas e incorrectas con LocalStorage, ambas variables = 0.
            var cantRespuestasCorrectas = 0;
            var cantRespuestasIncorrectas = 0;
            localStorage.setItem('respuestasCorrectas', cantRespuestasCorrectas);
            localStorage.setItem('respuestasIncorrectas', cantRespuestasIncorrectas);
            mostrarCantRespuestas();
          }else {
            //Seteamos las variables en LocalStorage con los valores traidos de la base de datos.
            localStorage.setItem('respuestasCorrectas', respuestasCorrectasDB);
            localStorage.setItem('respuestasIncorrectas', respuestasIncorrectasDB);
            mostrarCantRespuestas();
          }
      }
})
}

function mostrarCantRespuestas() {
    /*Funcion Cargar y Mostrar puntuación en el inicio y el perfil*/
    var respuestasCorrectas =  localStorage.getItem('respuestasCorrectas');
    var respuestasIncorrectas = localStorage.getItem('respuestasIncorrectas');
    var textoRespuestas = "Su puntuación =" + "<br> Respuestas correctas: "  + respuestasCorrectas + "<br> Respuestas incorrectas: " + respuestasIncorrectas;
    var contenedorCantRespuestas = document.getElementById("cantRespuestas");
    if (contenedorCantRespuestas!= null) {
      contenedorCantRespuestas.innerHTML = textoRespuestas;
    }
}

  var claseResCorrectas = "opcion-sin-hover ml-4 text-white px-4 py-2 bg-success";
  var claseResIncorrectas = "opcion-sin-hover ml-4 text-white px-4 py-2 bg-danger";

function deshabilitarRespondidas() {
  var respondidasYGuardadas = localStorage.getItem('respondidasUsuario');
  var arrayDeRespondidas = respondidasYGuardadas.split("/");//Genera un array con las id guardadas en la base de datos separadas con "/"
  arrayDeRespondidas.shift(); //Elimina el primer elemento del array(el cual viene vacío).

  arrayDeRespondidas.forEach(function(value, index){
    var botonYaRespondido = document.getElementById(value);
    if (botonYaRespondido !== null) {
      var nameBoton = botonYaRespondido.name;
      var botonEsCorrecto = value.slice(-1);
      var botonTextoSeleccion = document.getElementsByName(value);

      if (botonEsCorrecto == 1) {
          botonYaRespondido.className = claseResCorrectas;
          botonYaRespondido.disabled = 'none';

          var nameBotonesIncorrectos = nameBoton - 1;
          var botonesIncorrectos = document.getElementsByName(nameBotonesIncorrectos);
          botonesIncorrectos[0].className = claseResIncorrectas;
          botonesIncorrectos[0].disabled = 'none';

          botonesIncorrectos[1].className = claseResIncorrectas;
          botonesIncorrectos[1].disabled = 'none';

          botonTextoSeleccion[0].innerHTML = 'Respuesta Correcta, Sigue así!';
          botonTextoSeleccion[0].className += " text-info";
    }else {
          var botonesIncorrectos = document.getElementsByName(nameBoton);
          var nameBotonCorrecto = parseInt(nameBoton) + 1;
          var botonCorrecto = document.getElementsByName(nameBotonCorrecto);

          botonCorrecto[0].className = claseResCorrectas;
          botonCorrecto[0].disabled = 'none';

          botonesIncorrectos[0].className = claseResIncorrectas;
          botonesIncorrectos[0].disabled = 'none';

          botonesIncorrectos[1].className = claseResIncorrectas;
          botonesIncorrectos[1].disabled = 'none';

          botonTextoSeleccion[0].innerHTML = 'Respuesta Incorrecta, intenta con otra!';
          botonTextoSeleccion[0].className += " text-danger";
      }
  }
    }
);
}

function  guardarCantRespuestas() {
  //Esta función guarda los cambios en las puntuaciones del usuario en la base de datos.
  var respuestasCorrectasAGuardar =  localStorage.getItem('respuestasCorrectas');
  var respuestasIncorrectasAGuardar = localStorage.getItem('respuestasIncorrectas');
    $.ajaxSetup({
       headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
     });
    $.ajax({
      "method": "POST",
      "url": "/puntuaciones",
      "data": {cantRespuestasCorrectas:respuestasCorrectasAGuardar, cantRespuestasIncorrectas:respuestasIncorrectasAGuardar}
    }).done( function ( info ){
      //vamos a mostrar la respuesta del servidor
      // $("#mensaje").html( info );
    });
  }

  function respondioCorrecta(){
    //Esta función suma 1 al item 'respuestasCorrectas' en LocalStorage
    var aumentoUnaCorrecta = parseInt(localStorage.getItem('respuestasCorrectas')) + 1;
    localStorage.setItem('respuestasCorrectas', aumentoUnaCorrecta);
  }

  function respondioIncorrecta(){
    //Esta función suma 1 al item 'respuestasIncorrectas' en LocalStorage
    var aumentoUnaIncorrecta = parseInt(localStorage.getItem('respuestasIncorrectas')) + 1;
    localStorage.setItem('respuestasIncorrectas', aumentoUnaIncorrecta);
  }

$(document).ready(function () {
  //al cargar la página ejecutamos la función traerStats()
  traerStats();
  traerRespondidas();


    $('body').on('click', '#respuestasPorCat button', function () {
        var idRespuesta = $(this).attr('id');
        var nameRespuesta = $(this).attr('name');
        var respuestaCorrecta = idRespuesta.slice(-1);
        var respuesta = document.getElementById(idRespuesta);
        var textoSeleccion = document.getElementsByName(idRespuesta);



            //Agregamos la id de la respuesta al item 'respondidasUsuario' en LocalStorage
            var agregaRespondida = localStorage.getItem('respondidasUsuario') + "/" + idRespuesta;
            localStorage.setItem('respondidasUsuario', agregaRespondida);
            guardarRespondidas();

        if (respuestaCorrecta == 1) {
            respuesta.className = claseResCorrectas;
            respuesta.disabled = 'none';

            var nameRespuestasIncorrectas = nameRespuesta - 1;
            var respuestasIncorrectas = document.getElementsByName(nameRespuestasIncorrectas);
            respuestasIncorrectas[0].className = claseResIncorrectas;
            respuestasIncorrectas[0].disabled = 'none';

            respuestasIncorrectas[1].className = claseResIncorrectas;
            respuestasIncorrectas[1].disabled = 'none';

            textoSeleccion[0].innerHTML = 'Respuesta Correcta, Sigue así!';
            textoSeleccion[0].className += " text-info";

            respondioCorrecta();
            guardarCantRespuestas();
            mostrarCantRespuestas();

        } else {
            var respuestasIncorrectas = document.getElementsByName(nameRespuesta);
            var nameRespuestaCorrecta = parseInt(nameRespuesta) + 1;
            var respuestaCorrecta = document.getElementsByName(nameRespuestaCorrecta);

            respuestaCorrecta[0].className = claseResCorrectas;
            respuestaCorrecta[0].disabled = 'none';

            respuestasIncorrectas[0].className = claseResIncorrectas;
            respuestasIncorrectas[0].disabled = 'none';

            respuestasIncorrectas[1].className = claseResIncorrectas;
            respuestasIncorrectas[1].disabled = 'none';

            textoSeleccion[0].innerHTML = 'Respuesta Incorrecta, intenta con otra!';
            textoSeleccion[0].className += " text-danger";

            respondioIncorrecta();
            guardarCantRespuestas();
            mostrarCantRespuestas();
        }
    })
})

    //Al cerrar session la puntuacion se guarda en la base de datos

   var BotonCerrarSession = document.getElementById('botonCerrarSession');
   if (typeof botonCerrarSession !== 'undefined') {
     BotonCerrarSession.addEventListener('click', function(){
         guardarRespondidas();
         guardarCantRespuestas();
         localStorage.removeItem('respuestasCorrectas');
         localStorage.removeItem('respuestasIncorrectas');
         localStorage.removeItem('respondidasUsuario');
     }, false);   }



    // cuando se sale de la pagina se guarda la puntuacion

    window.addEventListener("beforeunload", function (e) {
        guardarCantRespuestas();
        guardarRespondidas();
        localStorage.removeItem('respuestasCorrectas');
        localStorage.removeItem('respuestasIncorrectas');
    })



// Captura de los elementos del form

var formulario = document.querySelector('#formulario');
if (formulario!= null) {
  var elementosFormulario = formulario.elements;
  var Nombre = elementosFormulario[1];
  var Usuario = elementosFormulario[2];
  var Email = elementosFormulario[3];
  var Pais = elementosFormulario[4];
  var Provincia = elementosFormulario[5];
  var Password = elementosFormulario[6];
  var ConfirmPass = elementosFormulario[7];
  var Imagen = elementosFormulario[8];
  var BotonEnviar = elementosFormulario[9];


  var formatoEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;


  //  Validacion de los campos del formulario


  BotonEnviar.disabled = true;

  Nombre.onchange = function () {
      if (this.value.trim().length < 3) {
          alert('El nombre debe tener 3 o mas caracteres');
          BotonEnviar.disabled = true;
      } else {
          BotonEnviar.disabled = false;
      }
  }

  Usuario.onchange = function () {
      if (this.value.trim().length < 3) {
          alert('El usuario debe tener 3 o mas caracteres');
      }
  }

  Email.onchange = function () {
      if (!formatoEmail.test(this.value)) {
          alert('El formato del email es invalido');
          BotonEnviar.disabled = true;
      } else {
          BotonEnviar.disabled = false;
      }
  }

  Password.onchange = function () {
      if (this.value.trim().length < 8) {
          alert('La Contraseña debe tener minimo 8 caracteres');
      }
  }

  ConfirmPass.onchange = function () {
      if (this.value.trim() < 8) {
          alert('La Contraseña debe tener 3 o mas caracteres');
      } else if (this.value.trim() != Password.value)
          alert('Las Contraseñas no coinciden');
  }

  //  Validacion al enviar el formulario

  formulario.onsubmit = function (event) {
      if (Nombre.value.trim() == "") {
          alert('Ingrese un Nombre');
          event.preventDefault();
      } else if (Usuario.value.trim() == "") {
          alert('El campo Usuario es obligatorio');
          event.preventDefault();
      } else if (Email.value.trim() == "") {
          alert('Ingrese un Email');
          event.preventDefault();
      } else if (Pais.value.trim() == "") {
          alert('El campo Pais es obligatorio');
          event.preventDefault();
      } else if (Password.value.trim() == "") {
          alert('Ingrese una Contraseña');
          event.preventDefault();
      } else if (ConfirmPass.value.trim() == "") {
          alert('Confirme su Contraseña');
          event.preventDefault();
      } else if (ConfirmPass.value.trim() != Password.value.trim()){
          alert('Sus contraseñas no coinciden');
          event.preventDefault();
      } else if (Imagen.value == "") {
          alert('Ingresar una imagen es obligatorio');
          event.preventDefault();
      }
  }

  // Implementacion de API para  paises

  fetch('http://pilote.techo.org/?do=api.getPaises')
      .then(function (response) {
          return response.json();
      })
      .then(function (paises) {
          for (pais in paises.contenido) {
              var option = document.createElement('option');
              var optionText = document.createTextNode(pais)
              option.append(optionText);
              Pais.append(option);
          }
      })
      .catch(function (error) {
          console.error(error);
      })

      // Implementacion de Api provincias

  Provincia.style.display = 'none';

  Pais.onchange = function () {
      if (Pais.value == "Argentina") {
          Provincia.style.display = 'block';
          fetch('https://apis.datos.gob.ar/georef/api/provincias')
              .then(function (response) {
                  return response.json();
              })
              .then(function (provincias) {
                  for (var data of provincias.provincias) {
                      var option = document.createElement('option');
                      var optionText = document.createTextNode(data.nombre)
                      option.append(optionText);
                      var provinciaDoc = document.getElementById('provincia');
                      provinciaDoc.append(option);
                  }
              })
      } else {
          Provincia.style.display = 'none';
      }
  }

}

var rank1 = document.getElementById('iconoRank1');
if(rank1) {
var icono = "<i class='fas fa-trophy'></i>"
rank1.innerHTML = icono;
}

var rank2 = document.getElementById('iconoRank2');
var rank3 = document.getElementById('iconoRank3');
if(rank2) {
    var icono = "<i class='fas fa-trophy'></i>"
    rank2.innerHTML = icono;
    }

    if(rank3) {
        var icono = "<i class='fas fa-trophy'></i>"
        rank3.innerHTML = icono;
        }

        if(botonReset = document.getElementById('restartStats')) {
        botonReset.addEventListener('click', function(){
            localStorage.removeItem('respuestasCorrectas');
            localStorage.removeItem('respuestasIncorrectas');
            localStorage.removeItem('respondidasUsuario');
            guardarRespondidas();
            location.reload();
        }, false);}


        var botonDark = document.getElementById('switch');
        botonDark.addEventListener('click',
        function() {
            document.body.classList.toggle('dark');

            botonDark.classList.toggle('active');

            // Guardamos el modo que el usuario utilice

            if (document.body.classList.contains('dark')) {
                localStorage.setItem('dark-mode', 'true');
            } else {
                localStorage.setItem('dark-mode', 'false');
            }
        })

        if (localStorage.getItem('dark-mode')) {
            if (localStorage.getItem('dark-mode') === 'true') {
                botonDark.classList.add('active');
                document.body.classList.add('dark');
            } else {
                var botonDark = document.getElementById('switch');
                botonDark.classList.remove('active');
                document.body.classList.remove('dark');
            }
        }
