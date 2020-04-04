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


var cantDeRespuestasCorrectas = 0;
var cantDeRespuestasIncorrectas = 0;
// function  enviarCantRespuestas(){
//   $.ajax({
//     "method": "POST",
//     "url": "puntuaciones.php",
//     "data": {cantDeRespuestasCorrectas:cantDeRespuestasCorrectas, cantDeRespuestasIncorrectas:cantDeRespuestasIncorrectas}
//   }).done( function ( info ){
//     //vamos a mostrar la respuesta del servidor
//     $("#mensaje").html( info );
//   });
// }



$(document).ready(function(){

  function crearRespuestasSession(){
    /*Guardando los datos en sessionStorage*/
    sessionStorage.setItem('respuestasCorrectas', cantDeRespuestasCorrectas);
    sessionStorage.setItem('respuestasIncorrectas', cantDeRespuestasIncorrectas);
  }
  function mostrarCantRespuestas(){
    /*Funcion Cargar y Mostrar datos*/
    var respuestasCorrectSession = sessionStorage.getItem('respuestasCorrectas');
    var respuestasIncorrectSession = sessionStorage.getItem('respuestasIncorrectas');
    var textoRespuestas = "Cantidad de respuestas correctas <br>" + respuestasCorrectSession + "<br> Cantidad de respuestas incorrectas <br>" + respuestasIncorrectSession;
    var muestroRespuestas = document.getElementById("mensaje");
    muestroRespuestas.innerHTML= textoRespuestas;
  }

  $('body').on('click', '#respuestasCat button', function(){
    var idRespuesta = $(this).attr('id');
    var categoriaRespuesta = idRespuesta.slice(0,1);
    var nameRespuesta = $(this).attr('name');
    var respuestaCorrecta = idRespuesta.slice(-1);
    var respuesta = document.getElementById(idRespuesta);
    var claseCorrectas = "opcion-sin-hover ml-5 text-white px-4 py-2 bg-success";
    var claseIncorrectas = "opcion-sin-hover ml-5 text-white px-4 py-2 bg-danger";
    var textoSeleccion =  document.getElementsByName(idRespuesta);


    if (respuestaCorrecta == 1) {
    respuesta.className = claseCorrectas;
    respuesta.disabled = 'none';

    var nameRespuestasIncorrectas = nameRespuesta - 1;
    var respuestasIncorrectas = document.getElementsByName(nameRespuestasIncorrectas);
    respuestasIncorrectas[0].className = claseIncorrectas;
    respuestasIncorrectas[0].disabled = 'none';

    respuestasIncorrectas[1].className = claseIncorrectas;
    respuestasIncorrectas[1].disabled = 'none';

    textoSeleccion[0].innerHTML='¡Respuesta Correcta!';
    textoSeleccion[0].className += " text-info";

    cantDeRespuestasCorrectas++;
    // enviarCantRespuestas();
    crearRespuestasSession();
    mostrarCantRespuestas();
    } else {
      var respuestasIncorrectas = document.getElementsByName(nameRespuesta);
      var nameRespuestaCorrecta = parseInt(nameRespuesta) + 1;
      var respuestaCorrecta = document.getElementsByName(nameRespuestaCorrecta);

      respuestaCorrecta[0].className = claseCorrectas;
      respuestaCorrecta[0].disabled = 'none';

      respuestasIncorrectas[0].className = claseIncorrectas;
      respuestasIncorrectas[0].disabled = 'none';

      respuestasIncorrectas[1].className = claseIncorrectas;
      respuestasIncorrectas[1].disabled = 'none';

      textoSeleccion[0].innerHTML='Respuesta Incorrecta :(';
      textoSeleccion[0].className += " text-danger";

      cantDeRespuestasIncorrectas++;
      // enviarCantRespuestas();
      crearRespuestasSession();
      mostrarCantRespuestas();

      

    }
  })
})

var formulario = document.querySelector('#formulario');
var elementosFormulario = formulario.elements;
var Nombre = elementosFormulario[1]
var Usuario = elementosFormulario[2]
var Email = elementosFormulario[3]
var Pais = elementosFormulario[4]
var Password = elementosFormulario[5]
var ConfirmPass = elementosFormulario[6]
var Imagen = elementosFormulario[7]
var formatoEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;


Nombre.onblur = function() {
    if(this.value.trim() == "") {
        alert('El campo no puede estar vacio');
    } else if (this.value.trim() < 3) {
        alert('El nombre tiene que tener 3 o mas caracteres');
    }
}

Usuario.onblur = function() {
    if(this.value.trim() == "") {
      alert('El campo no puede estar vacio');
  } else if (this.value.trim() < 3) {
      alert('El usuario tiene que tener 3 o mas caracteres');
  }
}

Email.onblur = function() {
  if(this.value.trim() == "") {
    alert('El campo no puede estar vacio');
} else if (this.value.trim() < 3) {
    alert('El nombre tiene que tener 3 o mas caracteres');
}
}