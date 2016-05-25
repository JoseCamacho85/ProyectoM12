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
                <option selected>Seleccione un POI</option>
                <?php makeDropdownlistArrayHistorial($arrayDiarioPoi); ?>
            </select>
            <div id="infoPoi">
            </div>
        </form>
        <div id="imagenHistorial">
            <?php include ("./modules/addFotoHistorial.php"); ?>
            <p><span>Foto: </span><input type="text" name="fotoHistorial" id="fotoHistorial" value="<?php echo $fotoSubida ?>"></p>
            <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post" enctype="multipart/form-data" name="inscripcion">
                <input type="file" name="archivo[]" multiple="multiple">
                <input type="submit" value="Subir imagen" class="trig">
            </form>
        </div>
    </div>
    <br />
    <a href="showDiaryUser.php"><button class="btn btn-info">VOLVER</button></a>
    <?php
} else {
    header("Location: formErrorSession.php");
}
include ("footer.php");
?>