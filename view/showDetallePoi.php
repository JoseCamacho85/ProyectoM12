<?php
include ("header.php");
include("../controller/controllerVerDetallePOI.php");
include("../controller/controllerIdDropdowns.php");
include("makeDropdownLists.php");
include("modules/showAnuncio.php");

$bitacle = unserialize($_SESSION['bitacle']);

if (checkSession()) {
$user = unserialize($_SESSION['user']);
//aplicar id de usuario logeado
$usuarios = $bitacle->getUsers();
$id_usuario = cogerIdUsuario($usuarios, $user);
}

$idPOI = $_REQUEST["id"];
?>

<div>
    <div>
        <span>Nombre: </span>
        <span><?php echo $nombre ?></span>
    </div>

    <div>
        <span></span>
        <span><img class="fotoMostrar" src="fotoPoi/<?php echo $foto ?>"/></span>
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
    <?php

    if (isset($_SESSION['user'])) {
        include("modules/addRutaPOI_addDiarioPOI.php");
    }
    ?>
    
    <?php
    
    showAnuncio($idPOI);
    ?>
    <a href="showPOI.php" id="volver"><button class="btn btn-info">VOLVER</button></a>
</div>
<script>
<?php include("js/relacionesAjax.js"); ?>
</script>
<?php
include ("footer.php");
?>