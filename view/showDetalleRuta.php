<?php
include ("header.php");
include("../controller/controllerVerDetalleRuta.php");
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

</div>
<?php
include ("footer.php");
?>