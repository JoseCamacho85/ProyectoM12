
$(document).ready(function () {
    validarPOI();
    validarUser();
    validarDiario();
    validarPanelAdmin();


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
        },
        submitHandler: function (form) {

            $.ajax({
                type: "POST",
                url: "../controller/controllerAddPoi.php",
                data: {
                    "nombrePoi": $("#nombrePoi").val(),
                    "descripcionPoi": $("#descripcionPoi").val(),
                    "urlPoi": $("#urlPoi").val(),
                    "precioPoi": $("#precioPoi").val(),
                    "horarioPoi": $("#horarioPoi").val(),
                    "fotoPoi": $("#fotoPoi").val(),
                    "tipoPoi": $("#tipoPoi").val(),
                    "entornoPoi": $("#entornoPoi").val(),
                    "transportePoi": $("#transportePoi").val(),
                    "paisPoi": $("#paisPoi").val(),
                    "selectCiudadPOI": $("#selectCiudadPOI").val()
                },
                success: function (data) {
                    $("#ok").html(data);
                    $("#ok").show();
                    $("#formPOI").hide();
                }
            });
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


function validarUser() {

    $("#ok").hide();

    $("#formUser").validate({
        rules: {
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

        },
        submitHandler: function (form) {

            $.ajax({
                type: "POST",
                url: "../controller/controllerAddUser.php",
                data: {
                    "username": $("#nombreUser").val(),
                    "password": $("#passUser").val(),
                    "email": $("#emailUser").val(),
                    "idioma": $("#idiomaUser").val(),
                    "telefono": $("#telefonoUser").val(),
                    "poblacion": $("#poblacionUser").val(),
                    "url": $("#urlUser").val(),
                    "fotoUser": $("#fotoUser").val(),
                    "textoPresentacion": $("#presentacionUser").val()

                },
                success: function (data) {
                    $("#ok").show();
                    $("#formUser").hide();
                    $("#inscripcion").hide();
                    alert("Usuario registrado correctamente");
                    window.location="../index.php";
                    //$("#ok").html(data);
                    
                    //window.location.replace("../../index.php");
                }
            });
        }
    });





}

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

