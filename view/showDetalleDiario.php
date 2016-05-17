<?php
include ("header.php");
include("../controller/controllerVerDetalleDiario.php");
include("../controller/controllerIdDropdowns.php");
include("makeDropdownLists.php");
$bitacle = unserialize($_SESSION['bitacle']);
$user = unserialize($_SESSION['user']);
//aplicar id de usuario logeado
$usuarios = $bitacle->getUsers();
$id_usuario = cogerIdUsuario($usuarios, $user);
?>
<div>
    <h4>DIARIO</h4>
    <div>
        <span>Nombre: </span>
        <span><?php echo $nombre ?></span>
    </div>

    <div>
        <span>Descripción: </span>
        <span><?php echo $foto ?></span>
    </div>
    <h4>POI</h4>
    <div>
        <span>Nombre: </span>
        <span><?php echo $descripcion ?></span>
    </div>

    <div>
        <span>Foto: </span>
        <span><?php echo $url ?></span>
    </div>

    <div>
        <span>Descripción: </span>
        <span><?php echo $precio ?></span>
    </div>

    <div>
        <span>URL: </span>
        <span><?php echo $horario ?></span>
    </div>

    <div>
        <span>Precio: </span>
        <span><?php echo $id_tipo ?></span>
    </div>

    <div>
        <span>Horario: </span>
        <span><?php echo $id_transporte ?></span>
    </div>

    <div>
        <span>Tipo: </span>
        <span><?php echo $id_entorno ?></span>
    </div>

    <div>
        <span>Transporte: </span>
        <span><?php echo $id_ciudad ?></span>
    </div>

    <div>
        <span>Entorno: </span>
        <span><?php echo $id_pais ?></span>
    </div>
    <div>
        <span>Ciudad: </span>
        <span><?php echo $id_pais ?></span>
    </div>
    <div>
        <span>País: </span>
        <span><?php echo $id_pais ?></span>
    </div>
</div>
<?php
include ("footer.php");
?>