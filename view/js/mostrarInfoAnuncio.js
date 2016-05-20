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
  
    if (anuncio != null){
        $("#tituloAnuncio").val(array[0]);
        $("#descripcionAnuncio").val(array[1]);
        $("#imagenAnuncio").val(array[2]);

    }else{
        
        $("#tituloAnuncio").val("");
        $("#descripcionAnuncio").val("");
        $("#imagenAnuncio").val("");
    }
    
}