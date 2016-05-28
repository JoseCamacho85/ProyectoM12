
$(document).ready(function () {
    validarUser();
});
/**
 * valida que los campos del usuario son validos
 * @returns {undefined}
 */
function validarUser() {

    $("#ok").hide();
    $("#formUser").validate({rules: {
            username: {required: true, minlength: 5, maxlength: 15},
            password: {required: true, minlength: 6, maxlength: 10},
            email: {required: true, email: true},
            idioma: {required: false, minlength: 4, maxlength: 10},
            telefono: {required: false, digits: true, minlength: 9, maxlength: 9},
            poblacion: {required: false, minlength: 3, maxlength: 25},
            url: {required: false, url: true},
            fotoUser: {required: false, minlength: 3},
            textoPresentacion: {required: false, minlength: 10, maxlength: 400}
        },
        messages: {
            username: "Debe introducir un nombre entre 5 y 15 caracteres.",
            password: "Debe introducir un password entre 6 y 10 caracteres.",
            email: "Debe introducir una dirección de mail válida (example@bitacle.com).",
            idioma: "Debe introducir una descripcion o precio de 5 a 20 caracteres.",
            telefono: "Debe introducir un número de 9 dígitos.",
            poblacion: "Debe sintroducir una población entre 3 y 25 caracteres.",
            url: "Debe introducir una url valida (http://www.example.com/).",
            fotoUser: "Debe cargar una foto válida.",
            textoPresentacion: "Debe escribir una presentación entre 10 y 400 caracteres."

        }
    });
}