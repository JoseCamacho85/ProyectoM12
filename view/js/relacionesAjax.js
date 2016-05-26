$(document).ready(function () {
    addDiarioPoi();
    addRutaPOI();
});

function addDiarioPoi() {
    $("#addDiario").click(function () {
     alert("Poi añadido a Diario correctamente");
        //alert($("#idDiario").val());
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
    });
}
function addRutaPOI() {
    $("#addRuta").click(function () {
        //alert($("#idPoi").val());
        //alert($("#idRuta").val());
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
    });
}
