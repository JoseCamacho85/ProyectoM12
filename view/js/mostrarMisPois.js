function mostrarMisPois(id_com) {
    $.ajax({
        async: true,
        type: "POST",
        url: "cogerInfoMisPois.php",
        data: {"data": id_com},
        success: tornadaCom
    });
}

function tornadaCom(txt) {
    var anuncio = txt;

    var array = anuncio.split("|");
  
    
        $("#nombrePoi").val(array[0]);
        $("#fotoPoi").val(array[1]);
        $("#descripcionPoi").val(array[2]);
 		$("#urlPoi").val(array[3]);
 		$("#precioPoi").val(array[4]);
 		$("#horarioPoi").val(array[5]);

        


}