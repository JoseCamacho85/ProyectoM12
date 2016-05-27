$(document).ready(function () {
    addDiarioPoi();
    addRutaPOI();
});

function addDiarioPoi() {
    $("#addDiario").click(function () {
        if ($("#idDiario option:selected").index() != 0) {
            alert("Poi añadido a Diario correctamente");
            $.ajax({
                type: "POST",
                url: "../controller/controllerAddDiaryPOI.php",
                data: {
                    "idPOI": $("#idPoi").val(),
                    "idDiario": $("#idDiario").val()

                },
                success: function (data) {
                    //alert(data);
                    //$("body").html(data);

                }
            });
        } else {
            alert("Deber seleccionar un Diario");

        }
    });
}

function addRutaPOI() {
    $("#addRuta").click(function () {
        if ($("#idRuta option:selected").index() != 0) {
            alert("Poi añadido a Ruta correctamente");
            $.ajax({
                type: "POST",
                url: "../controller/controllerAddRutaPOI.php",
                data: {
                    "idPOI": $("#idPoi").val(),
                    "idRuta": $("#idRuta").val()

                },
                success: function (data) {
                    // console.log(data);
                    //$("body").html(data);


                }
            });
        } else {
            alert("Deber seleccionar una Ruta");

        }
    });
}
