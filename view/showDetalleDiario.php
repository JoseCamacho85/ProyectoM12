<?php
include ("header.php");
include("../controller/controllerVerDetalleDiario.php");
include ("mostrarArrayRutaPoi.php");
$arrayDiarioPoi = $bitacle->VerDiarioPoi($_REQUEST['id']);
$id_diario = $_REQUEST['id'];
if (checkSession()) {
    ?>


    <script type="text/javascript"><?php include ("js/mostrarInfoHistorial.js"); ?></script>
    <div>
        <h2>DIARIO</h2>
        <div>
            <span>Nombre: </span>
            <span><?php echo $nombre ?></span>
        </div>

        <div>
            <span>Descripción: </span>
            <span><?php echo $descripcion ?></span>
        </div>

        <h2>POIs</h2>
        <form method="post" action="../controller/controllerModificarHistorial.php">
            <select id="pp" name="pp" onchange="mostrarInfoHistorial(this.value, '<?php echo $id_diario ?>')">
                <?php makeDropdownlistArrayHistorial($arrayDiarioPoi); ?>
            </select>
            <div id="infoPoi">
            </div>
        </form>
    </div>
    <br />
    <a href="showDiaryUser.php"><button class="btn btn-info">VOLVER</button></a>
    <?php
} else {
    header("Location: formErrorSession.php");
}
include ("footer.php");
?>