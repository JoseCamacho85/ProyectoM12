
$(document).ready(function () {
    validarPOI();
    validarUser();
    validarDiario();
    validarPanelAdmin();


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
        },
        submitHandler: function (form) {

            $.ajax({
                type: "POST",
                url: "../controller/controllerAddDiario.php",
                data: {
                    "nombre": $("#nombreDiario").val(),
                    "descripcion": $("#descripcionDiario").val(),
                },
                success: function (data) {
                    $("#ok").html(data);
                    $("#ok").show();
                    $("#formPOI").hide();
                }
            });
        }
    });
}

function validarPanelAdmin() {

    $("#ok").hide();

    $("#formAdminUser").validate({
        rules: {
            usernameUser: {required: true, minlength: 5, maxlength: 15},
            passwordUser: {required: false, minlength: 6, maxlength: 40},
            emailUser: {required: true, email: true},
            poblacionUser: {required: false, minlength: 5, maxlength: 20},
            idiomaUser: {required: false, minlength: 4, maxlength: 10},
            telefonoUser: {required: false, minlength: 9, maxlength: 9, digits: true},
            urlUser: {required: false, url: true},
            fotoUser: {required: false, minlength: 3},
            textoPresentacionUser: {required: false, minlength: 10, maxlength: 400}
        },
        messages: {
            usernameUser: "Debe introducir un nombre entre 5 y 15 caracteres.",
            passwordUser: "Debe introducir un password entre 6 y 10 caracteres.",
            emailUser: "Debe introducir una dirección de mail válida (example@bitacle.com).",
            idiomaUser: "Debe introducir una descripcion o precio de 5 a 20 caracteres.",
            telefonoUser: "Debe introducir un número de 9 dígitos.",
            poblacionUser: "Debe sintroducir una población entre 5 y 20 caracteres.",
            urlUser: "Debe introducir una url valida (http://www.example.com/).",
            fotoUser: "Debe cargar una foto válida.",
            textoPresentacionUser: "Debe escribir una presentación entre 10 y 400 caracteres."
        }
    });
}

