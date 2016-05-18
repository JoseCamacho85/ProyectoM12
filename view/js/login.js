$(document).ready(function () {
    $("#login").click(function () {
        $.ajax({
            type: "POST",
            url: "../controller/auth.php",
            data: {
                "password": $("#pass").val(),
                "username": $("#user").val()

            },
            success: function (data) {
                alert("Ingresaste Correctamente!");
                $("body").html(data);

            }
        });
    });
});