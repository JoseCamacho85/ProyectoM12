<?php
include ("header.php");

$bitacle = unserialize($_SESSION['bitacle']);
$user = unserialize($_SESSION['user']);

?>

<form id="formChat" role="form">
    <div class="form-group">
        <label for="user"><h3>Titulo</h3></label>
        <input type="text" class="form-control" id="title" name="title" placeholder="titulo">
    </div>
    <div class="form-group">
        <label for="user"><h5>receptor</h5></label>
        <input type="text" class="form-control" id="user" name="user" placeholder="Usuario">
    </div>
    <div class="form-group">				
        <label for="message"><h5>Mensaje</h5></label>
        <textarea id="message" name="message" placeholder="Mensaje"  class="form-control" rows="3"></textarea>
    </div>
    <button id="send" class="btn btn-info" >Send</button>

    <div class="form-group">
    <div class="col-md-12" >
        <h5>mensajes recibidos</h5>
        <div id="conversation" style="height:200px; border: 1px solid #CCCCCC; padding: 12px;  border-radius: 5px; overflow-x: hidden;">

        </div>
    </div>
    </div>
</form>

<script type="text/javascript">
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
</script>

<?php
include ("footer.php")
?>