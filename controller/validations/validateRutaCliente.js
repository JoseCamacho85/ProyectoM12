$(document).ready(function () {
    validarRuta();
});
function validarRuta() {

    $("#ok").hide();
    $("#formRuta").validate({
        rules: {
            nameRuta: {required: true, minlength: 2, maxlength: 50},
            nameDescripcion: {required: true, minlength: 5, maxlength: 200}
        },
        messages: {
            nameRuta: "Debe introducir un nombre entre 2 y 50 caracteres.",
            nameDescripcion: "Debe introducir una descripcion entre 5 y 200 caracteres."
        }
    });
}