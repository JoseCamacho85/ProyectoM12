function mostrarInfoAnuncio(id_com) {
    //id_com es el id del poi
    $.ajax({
        async: true,
        type: "POST",
        url: "../controller/controllerCamposAnuncio.php",
        data: {"data": id_com},
        success: tornadaCom
    });
}

function tornadaCom(text) {

    var anuncio = text;

    var array = anuncio.split(",");

    if (anuncio != null) {
        $("#tituloAnuncio").val(array[0]);
        $("#descripcionAnuncio").val(array[1]);
        $("#imagenAnuncio").val("Desactivado temporalmente");
        $("#crearAnuncio").css({"display": "none", "margin": "auto"});
        $("#modificarAnuncio").css({"display": "block", "margin": "auto"});
    }
    if (anuncio == "") {
        $("#tituloAnuncio").val("");
        $("#descripcionAnuncio").val("");
        $("#imagenAnuncio").val("Desactivado temporalmente");
        $("#crearAnuncio").css({"display": "block", "margin": "auto"});
        $("#modificarAnuncio").css({"display": "none", "margin": "auto"});
    }
}