$(document).ready(function () {
    validarDiario();
});

function validarDiario() {

    $("#ok").hide();

    $("#formDiario").validate({
        rules: {
            nombre: {required: true, minlength: 2, maxlength: 50},
            descripcion: {required: true, minlength: 5, maxlength: 400}
        },
        messages: {
            nombre: "Debe introducir un nombre entre 2 y 50 caracteres.",
            descripcion: "Debe introducir una descripcion entre 5 y 400 caracteres."
        }
    });
}