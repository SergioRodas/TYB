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



$(document).ready(function () {

    function crearRespuestasSession() {
        /*Guardando los datos en sessionStorage*/
        sessionStorage.setItem('respuestasCorrectas', cantDeRespuestasCorrectas);
        sessionStorage.setItem('respuestasIncorrectas', cantDeRespuestasIncorrectas);
    }

    function mostrarCantRespuestas() {
        /*Funcion Cargar y Mostrar datos*/
        var respuestasCorrectSession = sessionStorage.getItem('respuestasCorrectas');
        var respuestasIncorrectSession = sessionStorage.getItem('respuestasIncorrectas');
        var textoRespuestas = "Cantidad de respuestas correctas <br>" + respuestasCorrectSession + "<br> Cantidad de respuestas incorrectas <br>" + respuestasIncorrectSession;
        var muestroRespuestas = document.getElementById("mensaje");
        muestroRespuestas.innerHTML = textoRespuestas;
    }

    $('body').on('click', '#respuestasCat button', function () {
        var idRespuesta = $(this).attr('id');
        var categoriaRespuesta = idRespuesta.slice(0, 1);
        var nameRespuesta = $(this).attr('name');
        var respuestaCorrecta = idRespuesta.slice(-1);
        var respuesta = document.getElementById(idRespuesta);
        var claseCorrectas = "opcion-sin-hover ml-5 text-white px-4 py-2 bg-success";
        var claseIncorrectas = "opcion-sin-hover ml-5 text-white px-4 py-2 bg-danger";
        var textoSeleccion = document.getElementsByName(idRespuesta);


        if (respuestaCorrecta == 1) {
            respuesta.className = claseCorrectas;
            respuesta.disabled = 'none';

            var nameRespuestasIncorrectas = nameRespuesta - 1;
            var respuestasIncorrectas = document.getElementsByName(nameRespuestasIncorrectas);
            respuestasIncorrectas[0].className = claseIncorrectas;
            respuestasIncorrectas[0].disabled = 'none';

            respuestasIncorrectas[1].className = claseIncorrectas;
            respuestasIncorrectas[1].disabled = 'none';

            textoSeleccion[0].innerHTML = '¡Respuesta Correcta!';
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

            textoSeleccion[0].innerHTML = 'Respuesta Incorrecta :(';
            textoSeleccion[0].className += " text-danger";

            cantDeRespuestasIncorrectas++;
            // enviarCantRespuestas();
            crearRespuestasSession();
            mostrarCantRespuestas();



        }
    })
})

// Captura de los elementos del form

var formulario = document.querySelector('#formulario');
var elementosFormulario = formulario.elements;
var Nombre = elementosFormulario[1];
var Usuario = elementosFormulario[2];
var Email = elementosFormulario[3];
var Pais = elementosFormulario[4];
var Provincia = elementosFormulario[5];
var Password = elementosFormulario[6];
var ConfirmPass = elementosFormulario[7];
var Imagen = elementosFormulario[8];


var formatoEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
var formatoImagen = /(.png|.PNG|.jpg|.JPG|)$/i;

//  Validacion de los campos del formulario

Nombre.onchange = function () {
    if (this.value.trim().length < 3) {
        alert('El nombre debe tener 3 o mas caracteres');
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

    // Implementacion de apis provincias

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
