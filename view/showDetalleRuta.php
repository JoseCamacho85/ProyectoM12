<?php
include ("header.php");
include("../controller/controllerVerDetalleRuta.php");
include ("mostrarArrayRutaPoi.php");


$arrayRutaPoi = $bitacle->VerRutaPoi($_REQUEST['id']);

?>
<script type="text/javascript"><?php include ("js/mostrarInfoPoi.js"); ?></script>
<div>
    <div>
        <span>Nombre: </span>
        <span><?php echo $nombre ?></span>
    </div>

    <div>
        <span>Descripcion: </span>
        <span><?php echo $descripcion ?></span>
    </div>

    <select id="selectPois" name="selectPois" onchange="mostrarInfoPoi(this.value)">	  
   	<?php makeDropdownlistArray($arrayRutaPoi); ?>
    </select>

    <div id = "infoPoi">	
    </div>	

</div>
<?php
include ("footer.php");
?>