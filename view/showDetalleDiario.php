<?php
include ("header.php");
include("../controller/controllerVerDetalleDiario.php");
include ("mostrarArrayRutaPoi.php");
$arrayDiarioPoi = $bitacle->VerDiarioPoi($_REQUEST['id']);
?>
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
    <select>
        <?php makeDropdownlistArray($arrayDiarioPoi); ?>
    </select>
</div>
<?php
include ("footer.php");
?>