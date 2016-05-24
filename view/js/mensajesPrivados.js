$(document).on("ready", function () {
    registerMessage();
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