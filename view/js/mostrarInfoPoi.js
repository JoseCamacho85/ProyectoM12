function mostrarInfoPoi(id_com) {
    $.ajax({
        async: true,
        type: "POST",
        url: "cogerInfoPoi.php",
        data: {"data": id_com},
        success: tornadaCom
    });
}

function tornadaCom(txt) {
    $("#infoPoi").html(txt);
    $("#infoPoi").css({"text-align": "justify", "width": "75%", "margin": "auto", "padding": "15px"});
}