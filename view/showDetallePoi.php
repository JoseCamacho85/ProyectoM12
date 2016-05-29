<?php
include ("header.php");
include("../controller/controllerVerDetallePOI.php");
include("../controller/controllerIdDropdowns.php");
include("makeDropdownLists.php");
include("modules/showAnuncio.php");

$bitacle = unserialize($_SESSION['bitacle']);

if (checkSession()) {
    $user = unserialize($_SESSION['user']);

    $usuarios = $bitacle->getUsers();
    $id_usuario = cogerIdUsuario($usuarios, $user);
    include("../controller/validatorTipoUsuario.php");
    include 'modules/moduleUserNav.php';
}

$idPOI = $_REQUEST["id"];
?>
<a href="showPOI.php" id="volver"><button class="btn btn-info">Volver</button></a>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-12">
                <div id="tituloDetalle">
                    <span><?php echo $nombre ?></span>
                </div>

            </div>
            <div class="col-md-12">
                <div class="col-md-3">
                    <div class="pull-left">

                        <span><img class="fotoMostrar img-responsive" src="fotoPoi/<?php echo $foto ?>"/></span>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="pull-left">
                        <span class="titulos">Descripción: </span>
                        <span><?php echo $descripcion ?></span>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="col-md-6">
                    <div>
                        <span class="titulos">Url: </span>
                        <span><a href="<?php echo $url ?>" target="_blank"><?php echo $url ?></a></span>
                    </div>

                    <div>
                        <span class="titulos">Precio: </span>
                        <span><?php echo $precio ?></span>
                    </div>

                    <div>
                        <span class="titulos">Horario: </span>
                        <span><?php echo $horario ?></span>
                    </div>

                    <div>
                        <span class="titulos">Tipo: </span>
                        <span><?php echo $id_tipo ?></span>
                    </div>

                    <div>
                        <span class="titulos">Transporte: </span>
                        <span><?php echo $id_transporte ?></span>
                    </div>

                    <div>
                        <span class="titulos">Entorno: </span>
                        <span><?php echo $id_entorno ?></span>
                    </div>

                    <div>
                        <span class="titulos">Ciudad: </span>
                        <span><?php echo $id_ciudad ?></span>
                    </div>

                    <div class="padBot">
                        <span class="titulos">Pais: </span>
                        <span><?php echo $id_pais ?></span>
                    </div>
                    <?php
                    if (isset($_SESSION['user'])) {
                        include("modules/addRutaPOI_addDiarioPOI.php");
                    }
                    ?>
                </div>
                <div class="col-md-6">

                    <?php
                    showAnuncio($idPOI);
                    ?>

                    <div ></div>
                </div>
            </div>
        </div>
    </div>
</div>
    <script>
<?php include("js/relacionesAjax.js"); ?>
    </script>
    <?php
    include ("footer.php");
    ?>