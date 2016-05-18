
$(document).ready(function () {
    validarPOI();
});

function validarPOI() {

    $("#ok").hide();

    $("#formPOI").validate({
        rules: {
            nombrePoi: {required: true, minlength: 2, maxlength: 50},
            descripcionPoi: {minlength: 5, maxlength: 400},
            urlPoi: {url:true},
            precioPoi: {minlength: 5, maxlength: 200},
            horarioPoi: {minlength: 5, maxlength: 200}
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
                    "nombrePoi":$("#nombrePoi").val(),
                    "fotoPoi":$("#fotoPoi").val(),
                    "descripcionPoi":$("#descripcionPoi").val(),
                    "urlPoi":$("#urlPoi").val(),
                    "precioPoi":$("#precioPoi").val(),
                    "horarioPoi":$("#horarioPoi").val(),
                    "tipoPoi":$("#tipoPoi").val(),
                    "transportePoi":$("#transportePoi").val(),
                    "entornoPoi":$("#entornoPoi").val(),
                    "paisPoi":$("#paisPoi").val(),
                    "selectCiudadPOI":$("#selectCiudadPOI").val(),
              
                    
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

