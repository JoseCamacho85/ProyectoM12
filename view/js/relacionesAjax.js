$(document).ready(function () {
    addDiarioPoi();
    addRutaPOI();
});

function addDiarioPoi() {
    $("#addDiario").click(function () {
        alert($("#idPoi").val());
        alert($("#idDiario").val());
        $.ajax({
            type: "POST",
            url: "../controller/controllerAddDiaryPOI.php",
            data: {
                "idPOI": $("#idPoi").val(),
                "idRuta": $("#idRuta").val()

            },
            success: function (data) {

                //$("body").html(data);

            }
        });
    });
}
function addRutaPOI() {
    $("#addRuta").click(function () {
        alert($("#idPoi").val());
        alert($("#idRuta").val());
        $.ajax({
            type: "POST",
            url: "../controller/controllerAddRutaPOI.php",
            data: {
                "idPOI": $("#idPoi").val(),
                "idRuta": $("#idRuta").val()

            },
            success: function (data) {

                //$("body").html(data);

            }
        });
    });
}
