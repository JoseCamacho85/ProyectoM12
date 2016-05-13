
$(document).ready(function () {
    validarPOI();
});

function validarPOI() {

    $("#ok").hide();

    $("#formPOI").validate({
        rules: {
//            nombrePoi: {required: true, minlength: 2, maxlength: 20},
//            fotoPoi: {minlength: 2},
//            descripcionPoi: {minlength: 5, maxlength: 100},
//            urlPoi: {minlength: 8, maxlength: 50},
//            precioPoi: {required: false},
//            horarioPoi: {required: false, minlength: 2},
//            tipoPoi: {required: false, minlength: 2},
//            transportePoi: {required: false, minlength: 2},
//            entornoPoi: {required: false, minlength: 2},
//            paisPoi: {required: false, minlength: 2}
        },
        messages: {
//            nombrePoi: "Debe introducir su nombre.",
//            fotoPoi: "Debe introducir su foto.",
//            descripcionPoi: "Debe introducir una descripcion.",
//            urlPoi: "Debe introducir una url.",
//            precioPoi: "Debe introducir sun precio.",
//            horarioPoi: "Debe introducir un horario.",
//            tipoPoi: "Debe seleccionar un tipo de POI.",
//            transportePoi: "Debe seleccionar un transporte de POI.",
//            entornoPoi: "Debe seleccionar un entorno de POI.",
//            paisPoi: "Debe seleccionar un tipo pais POI.",
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
                    "ciudadPoi":$("#ciudadPoi").val(),
              
                    
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

