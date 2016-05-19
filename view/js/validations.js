
$(document).ready(function () {
    validarPOI();
    validarUser();

});

function validarPOI() {

    $("#ok").hide();

    $("#formPOI").validate({
        rules: {
            nombrePoi: {required: true, minlength: 2, maxlength: 50},
            descripcionPoi: {required:true, minlength: 5, maxlength: 400},
            urlPoi: {required:false, url: true},
            precioPoi: {required:true, minlength: 5, maxlength: 200},
            horarioPoi: {required:true, minlength: 5, maxlength: 200}
//            tipoPoi: {required: false, minlength: 2},
//            transportePoi: {required: false, minlength: 2},
//            entornoPoi: {required: false, minlength: 2},
//            paisPoi: {required: false, minlength: 2}
        },
        messages: {
            nombrePoi: "Debe introducir un nombre entre 2 y 20 caracteres.",
            descripcionPoi: "Debe introducir una descripcion entre 5 y 400 caracteres.",
            urlPoi: "Debe introducir una url valida(http://www.example.com/).",
            precioPoi: "Debe introducir una descripcion o precio de 5 a 200 caracteres.",
            horarioPoi: "Debe introducir una descripcion u horario de 5 a 200 caracteres."
//            tipoPoi: "Debe seleccionar un tipo de POI.",
//            transportePoi: "Debe seleccionar un transporte de POI.",
//            entornoPoi: "Debe seleccionar un entorno de POI.",
//            paisPoi: "Debe seleccionar un tipo pais POI."
        },
        submitHandler: function (form) {

            $.ajax({
                type: "POST",
                url: "../controller/controllerAddPoi.php",
                data: {
                    "nombrePoi": $("#nombrePoi").val(),
//                    "fotoPoi":$("#fotoPoi").val(),
                    "descripcionPoi": $("#descripcionPoi").val(),
                    "urlPoi": $("#urlPoi").val(),
                    "precioPoi": $("#precioPoi").val(),
                    "horarioPoi": $("#horarioPoi").val()
//                    "tipoPoi":$("#tipoPoi").val(),
//                    "transportePoi":$("#transportePoi").val(),
//                    "entornoPoi":$("#entornoPoi").val(),
//                    "paisPoi":$("#paisPoi").val(),
//                    "selectCiudadPOI":$("#selectCiudadPOI").val(),
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


function validarUser() {

    $("#ok").hide();

    $("#formUser").validate({
        rules: {
            username: {required: true, minlength: 5, maxlength: 15},
            password: {required:true,minlength: 6, maxlength: 10},
            email: {required:true, email:true},
            idioma: {required:false, minlength: 4, maxlength: 10},
            telefono: {required:false, digits:true, minlength: 9, maxlength: 9},
            poblacion: {required:false, minlength: 5, maxlength:20},
            url: {required:false, url: true},
            fotoUser: {required:false, minlength: 3},
            textoPresentacion: {required:false, minlength: 10, maxlength: 400}
        },
        messages: {
            username: "Debe introducir un nombre entre 5 y 15 caracteres.",
            password: "Debe introducir un password entre 6 y 10 caracteres.",
            email: "Debe introducir una dirección de mail válida (example@bitacle.com).",
            idioma: "Debe introducir una descripcion o precio de 5 a 200 caracteres.",
            telefono: "Debe introducir un número de 9 dígitos.",
            poblacion: "Debe sintroducir una población entre 5 y 20 caracteres.",
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
                    "password":$("#passUser").val(),
                    "email": $("#emailUser").val(),
                    "idioma": $("#idiomaUser").val(),
                    "telefono": $("#telefonoUser").val(),
                    "poblacion": $("#poblacionUser").val(),
                    "url":$("#urlUser").val(),
                    "fotoUser":$("#fotoUser").val(),
                    "textoPresentacion":$("#presentacionUser").val()

                },
                success: function (data) {
                    $("#ok").html(data);
                    $("#ok").show();
                    $("#formUser").hide();
                }
            });
        }
    });
}

