$(document).ready(function () {
    validarPOI();

});

function validarPOI() {

    $("#ok").hide();

    $("#formPOI").validate({
        rules: {
            nombrePoi: {required: true, minlength: 2, maxlength: 50},
            descripcionPoi: {required: true, minlength: 5, maxlength: 400},
            urlPoi: {required: false, url: true},
            precioPoi: {required: true, minlength: 5, maxlength: 200},
            horarioPoi: {required: true, minlength: 5, maxlength: 200}
        },
        messages: {
            nombrePoi: "Debe introducir un nombre entre 2 y 50 caracteres.",
            descripcionPoi: "Debe introducir una descripcion entre 5 y 400 caracteres.",
            urlPoi: "Debe introducir una url valida(http://www.example.com/).",
            precioPoi: "Debe introducir una descripcion o precio de 5 a 200 caracteres.",
            horarioPoi: "Debe introducir una descripcion u horario de 5 a 200 caracteres."
        }

    });

    $('#validate').click(function () {

        if ($('#tipoPoi option:selected').index() == 0) {
            $(".erroresTipo").html('Debe seleccionar un tipo de POI.');

        }

        if ($('#transportePoi option:selected').index() == 0) {
            $(".erroresTransporte").html('Debe seleccionar un transporte.');
        }

        if ($('#entornoPoi option:selected').index() == 0) {
            $(".erroresEntorno").html('Debe seleccionar un entorno.');
        }

        if ($('#paisPoi option:selected').index() == 0) {
            $(".erroresPais").html('Debe seleccionar un país.');
        }

        if ($('#selectCiudadPOI option:selected').index() == 0) {
            $(".erroresCiudad").html('Debe seleccionar una ciudad.');
        }
    });
}


