function mostrarUsuarios(id_com) {
    $.ajax({
        async: true,
        type: "POST",
        url: "cogerInfoUser.php",
        data: {"data": id_com},
        success: tornadaCom
    });
}

function tornadaCom(txt) {
    var user = txt;

    var array = user.split("|");
  
    
        $("#usernameUser").val(array[1]);
        $("#passwordUser").val(array[2]);
        $("#emailUser").val(array[3]);
 		$("#poblacionUser").val(array[4]);
 		$("#idiomaUser").val(array[5]);
 		$("#telefonoUser").val(array[6]);
        $("#urlUser").val(array[7]);
        $("#fotoUser").val(array[8]);
        $("#textoPresentacionUser").val(array[9]);
        


}