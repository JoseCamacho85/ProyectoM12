<?php
include ("header.php");
include '../controller/controllerVerDetalleUsuario.php';
$bitacle = unserialize($_SESSION['bitacle']);
$user = unserialize($_SESSION['user']);
include 'modules/moduleUserNav.php';
?>
<script type="text/javascript">
    <?php include("js/mensajesPrivados.js"); ?>
</script>
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
    <hr>
    <div class="form-group">
    <div class="col-md-12" >
        <h5>mensajes recibidos</h5>
        <div id="conversation" style="height:200px; border: 1px solid #CCCCCC; padding: 12px;  border-radius: 5px; overflow-x: hidden;">

        </div>
    </div>
    </div>
</form>

<?php
include ("footer.php")
?>