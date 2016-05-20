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
    //var anuncio = txt;
    //$("#infoPoi").html(txt);
    //$("#prueba1").html(txt);
    //if (anuncio != null){
        $("#prueba1").val(text);
        //$("#descripcionAnuncio").val(anuncio[1]);
        //$("#imagenAnuncio").val(anuncio[2]);

    //}else{
        /*
        $("#tituloAnuncio").val("");
        $("#descripcionAnuncio").val("");
        $("#imagenAnuncio").val("");
    }*/
    
}