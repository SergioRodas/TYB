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



$(document).ready(function(){
  $('body').on('click', '#respuestasCat button', function(){
    var idRespuesta = $(this).attr('id');
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


    }
  })
})
