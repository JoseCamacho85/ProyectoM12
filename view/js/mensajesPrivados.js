$(document).on("ready", function () {
     validarMP();
    //registerMessage();
    $.ajaxSetup({"cache": false});
    setInterval("loadOldMessages()", 500);

});


var registerMessage = function () {
    $("#send").on("click", function (e) {
        e.preventDefault();
        var frm = $("#formChat").serialize();
        $.ajax({
            type: "POST",
            url: "../controller/registerMessage.php",
            data: frm
        }).done(function (info) {
            console.log(info);
        })
    });
}

var loadOldMessages = function () {
    var frm = $("#formChat").serialize();
    $.ajax({
        type: "POST",
        data: frm,
        url: "../controller/viewMessages.php"
    }).done(function (info) {
        $("#conversation").html(info);
        $("#conversation p:last-child").css({"background-color": "lightgreen",
            "padding-botton": "20px"})
    });
}

function validarMP() {

    $("#ok").hide();

    $("#formChat").validate({
        rules: {
            title: {required: true, minlength: 2, maxlength: 50},
//            user: {required: true, minlength: 5, maxlength: 15},
            message: {required: true, minlength: 2, maxlength: 200}
        },
        messages: {
            title: "Debe introducir un título entre 2 y 50 caracteres.",
//            user: "Debe introducir un usuario entre 5 y 15 caracteres.",
            message: "Debe introducir una mensaje entre 5 y 200 caracteres."
        },
         submitHandler: registerMessage
    });
    
        
    }

