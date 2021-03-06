<?php
include ("header.php");
include '../controller/controllerVerDetalleUsuario.php';
$bitacle = unserialize($_SESSION['bitacle']);
$user = unserialize($_SESSION['user']);
include("../controller/validatorTipoUsuario.php");
include 'modules/moduleUserNav.php';
include ("makeDropdownLists.php"); // RAQUEL
?>
<script type="text/javascript">
<?php include("js/mensajesPrivados.js"); ?>
</script>
<div class="col-md-10 col-md-offset-1">
    <form id="formChat" role="form">
        <div class="form-group">
            <label for="user"><h5>Asunto</h5></label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Asunto">
        </div>
        <div class="form-group">
            <label for="user"><h5>Enviar a</h5></label>
            <select class="form-control" id="user" name="user" placeholder="Usuario">
                <?php makeDropdownlistUsers(); ?>
            </select>
        </div>
        <div class="form-group">                
            <label for="message"><h5>Mensaje</h5></label>
            <textarea id="message" name="message" placeholder="Mensaje"  class="form-control" rows="3"></textarea>
        </div>
        <button id="send" class="btn btn-info" >Enviar</button>
        <div class="form-group">
            <div class="col-md-12" >
                <h5>mensajes recibidos</h5>
                <div id="conversation">
                </div>
                <div id="ok"></div>
            </div>
        </div>
    </form>
</div>
<?php
include ("footer.php");
?>