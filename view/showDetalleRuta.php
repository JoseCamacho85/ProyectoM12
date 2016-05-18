<?php
include ("header.php");
include("../controller/controllerVerDetalleRuta.php");
include ("mostrarArrayRutaPoi.php");

$arrayRutaPoi = $bitacle->VerRutaPoi($_REQUEST['id']);

?>
<div>
    <div>
        <span>Nombre: </span>
        <span><?php echo $nombre ?></span>
    </div>

    <div>
        <span>Descripcion: </span>
        <span><?php echo $descripcion ?></span>
    </div>

    <select id="selectPois" name="selectPois" class="form-control">
    	  
   	<?php makeDropdownlistArray($arrayRutaPoi); ?>
    	
    </select>

</div>
<?php
include ("footer.php");
?>