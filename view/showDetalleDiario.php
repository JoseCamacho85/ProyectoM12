<?php
include ("header.php");
include("../controller/controllerVerDetalleDiario.php");
include ("mostrarArrayRutaPoi.php");
$arrayDiarioPoi = $bitacle->VerDiarioPoi($_REQUEST['id']);
$id_diario = $_REQUEST['id'];
if (checkSession()) {
    include '../controller/controllerVerDetalleUsuario.php';
    include("../controller/validatorTipoUsuario.php");
    include 'modules/moduleUserNav.php';
    ?>
    <script type="text/javascript"><?php include ("js/mostrarInfoHistorial.js"); ?></script>
    <a href="showDiaryUser.php"><button class="btn btn-info">VOLVER</button></a>
    <div class="container">
        <h2>diario</h2>
        <div class="row content">
            <div class="col-md-12"> 
                <div class="cuadro">
                    <div>
                        <span class="titulos">Nombre: </span>
                        <span><?php echo $nombre ?></span>
                    </div>

                    <div>
                        <span class="titulos">Descripción: </span>
                        <span><?php echo $descripcion ?></span>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <form method="post" action="../controller/controllerModificarHistorial.php">
                    <select id="pp" name="pp" onchange="mostrarInfoHistorial(this.value, '<?php echo $id_diario ?>')">
                        <?php makeDropdownlistArrayHistorial($arrayDiarioPoi); ?>
                    </select>
                    <div id="infoPoi">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
} else {
    header("Location: formErrorSession.php");
}
include ("footer.php");
?>