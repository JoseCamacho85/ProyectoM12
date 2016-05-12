$(document).ready(function () {

    validarAddPOI;
});

function validarAddPOI() {
    var nombrePOI = $("#nombrePoi").val();
    var fotoPOI = $("#fotoPoi").val();
    var descripcionPOI = $("#descripcionPoi").val();
    var urlPOI = $("#urlPoi").val();
    var precioPOI = $("#precioPoi").val();
    var horarioPOI = $("#horarioPoi").val();
    var tipoPOI = $("#tipoPoi").val();
    var transportePOI = $("#transportePoi").val();
    var entornoPOI = $("#entornoPoi").val();
    var paisPOI = $("#paisPoi").val();
    
    if (nombrePOI.length > 50 || nombrePOI.length <1) {
        
    }

}