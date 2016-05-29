<?php
include ("header.php");
include("../controller/controllerVerDetalleRuta.php");
include ("mostrarArrayRutaPoi.php");

$arrayRutaPoi = $bitacle->VerRutaPoi($_REQUEST['id']);
if (checkSession()) {
    include '../controller/controllerVerDetalleUsuario.php';
    include("../controller/validatorTipoUsuario.php");
    include 'modules/moduleUserNav.php';
}
?>
<script type="text/javascript"><?php include ("js/mostrarInfoPoi.js"); ?></script>
<a href="showRutas.php" id="volver"><button class="btn btn-info">Volver</button></a>

<div class="container">
    <h2>ruta</h2>
    <div class="row content">
        <div class="col-md-12"> 
            <div class="cuadro">
                <div>
                    <span class="titulos">Nombre: </span>
                    <span><?php echo $nombre ?></span>
                </div>

                <div>
                    <span class="titulos">Descripción: </span>
                    <span><?php echo $descripcion ?></span>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <select id="selectPois" name="selectPois" onchange="mostrarInfoPoi(this.value)">	  
                <?php makeDropdownlistArray($arrayRutaPoi); ?>
            </select>
            <div id = "infoPoi">	
            </div>	
        </div>
    </div>
</div>
<?php
include ("footer.php");
?>