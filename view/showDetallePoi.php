<?php
include ("header.php");
include("../controller/controllerVerDetallePOI.php");
?>
<div>

    <div>
    	<span>Nombre: </span>
    	<span><?php echo $nombre ?></span>
    </div>

    <div>
    	<span>Foto: </span>
    	<span><?php echo $foto ?></span>
    </div>

    <div>
    	<span>Descripcion: </span>
    	<span><?php echo $descripcion ?></span>
    </div>

    <div>
    	<span>Url: </span>
    	<span><?php echo $url ?></span>
    </div>

    <div>
    	<span>Precio: </span>
    	<span><?php echo $precio ?></span>
    </div>

    <div>
    	<span>Horario: </span>
    	<span><?php echo $horario ?></span>
    </div>

    <div>
    	<span>Tipo: </span>
    	<span><?php echo $id_tipo ?></span>
    </div>

    <div>
    	<span>Transporte: </span>
    	<span><?php echo $id_transporte ?></span>
    </div>

    <div>
    	<span>Entorno: </span>
    	<span><?php echo $id_entorno ?></span>
    </div>

    <div>
    	<span>Ciudad: </span>
    	<span><?php echo $id_ciudad ?></span>
    </div>

    <div>
    	<span>Pais: </span>
    	<span><?php echo $id_pais ?></span>
    </div>

</div>
<?php
include ("footer.php");
?>