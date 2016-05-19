<?php
include ("header.php");
include("../controller/controllerVerDetalleDiario.php");
include ("mostrarArrayRutaPoi.php");
$arrayDiarioPoi = $bitacle->VerDiarioPoi($_REQUEST['id']);
?>
<!--<script type="text/javascript"><?php include ("js/mostrarInfoPoi.js"); ?></script>-->
<script type="text/javascript"><?php include ("js/mostrarInfoHistorial.js"); ?></script>
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
    <select id="pp" name="pp" onchange="mostrarInfoHistorial(this.value)">
        <option>Seleccione un POI</option>
        <?php makeDropdownlistArrayHistorial($arrayDiarioPoi); ?>
    </select>
    
    <div id="infoPoi">
    </div>
</div>
<br />
<a href="showDiaryUser.php"><button class="btn btn-info">Diarios</button></a>
<?php
include ("footer.php");
?>