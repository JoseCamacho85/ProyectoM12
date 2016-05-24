function mostrarInfoHistorial(id_com, id_diario) {
    $.ajax({
        async: true,
        type: "POST",
        url: "cogerInfoHistorial.php",
        data: {"data": id_com, "diario": id_diario},
        success: tornadaCom
    });
}

function tornadaCom(txt) {
    $("#infoPoi").html(txt);
    $("#infoPoi").css({"text-align": "justify", "width": "75%", "margin": "auto", "padding": "15px"});
}