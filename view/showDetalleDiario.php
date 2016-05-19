<?php
include ("header.php");
include("../controller/controllerVerDetalleDiario.php");
include ("mostrarArrayRutaPoi.php");
$arrayDiarioPoi = $bitacle->VerDiarioPoi($_REQUEST['id']);
?>
<script type="text/javascript"><?php include ("js/mostrarInfoPoi.js"); ?></script>
<div>
    <h4>DIARIO</h4>
    <div>
        <span>Nombre: </span>
        <span><?php echo $nombre ?></span>
    </div>

    <div>
        <span>Descripción: </span>
        <span><?php echo $descripcion ?></span>
    </div>
    <h4>POIs</h4>
    <select id="selectPois" name="selectPois" onchange="mostrarInfoPoi(this.value)">
        <?php makeDropdownlistArray($arrayDiarioPoi); ?>
    </select>
    <div id="infoPoi">	
    </div>
</div>
<?php
include ("footer.php");
?>