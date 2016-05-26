<?php
include ("header.php");
include ("makeDropdownLists.php");
include("../controller/controllerIdDropdowns.php");
include("../controller/validatorTipoUsuario.php");
include 'modules/moduleUserNav.php';
if ((checkSession()) && ($objUsuarioConectado->getProfessional() == 1)) {
    ?>
    <script type="text/javascript"><?php include ("js/mostrarInfoAnuncio.js"); ?></script>
    <div class="container-fluid text-center">    
        <div class="row content">
            <div class="col-sm-12 text-center"> 
                <h2>Añadir anuncio</h2>
                <div>
                    <?php
                    include ("./modules/addFotoAnuncio.php");
                    ?>
                    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post" enctype="multipart/form-data" name="inscripcion">
                        <input class="center-block" type="file" name="archivo[]" multiple="multiple">
                        <input type="submit" value="Subir imagen"  class="trig">
                    </form>
                    <form action="../controller/controllerAddAnuncio.php" name="formAnuncio" id="formAnuncio">
                        <hr>
                        <p>POI:<select id="POIAnuncio" name="POIAnuncio" onchange="mostrarInfoAnuncio(this.value)">
                                <?php makeDropdownlistPoisUser(); ?>
                            </select><span class="erroresAnuncioSelect"></span></p>
                        <p><span>Foto: </span><input type="text" name="imagenAnuncio" id="imagenAnuncio" value="<?php echo $fotoSubida; ?>"></p>
                        <p>Titulo: <input type="text" id="tituloAnuncio" name="tituloAnuncio" ></p>
                        <p>Descripción:</p><textarea rows="4" cols="50" id="descripcionAnuncio" name="descripcionAnuncio"></textarea>
                        <input type="submit" id="modificarAnuncio" name= "modificarAnuncio" value="Modificar Anuncio">
                        <div id="botones">
                            <input type="submit" id="crearAnuncio" name="crearAnuncio" value="Crear Anuncio">
                        </div>
                    </form>
                </div>
                <div id="seleccionados">
                </div>
                <div id="prueba1">
                </div>
            </div>
        </div>
    </div>
    <?php
} else {
    header("Location: formErrorSession.php");
}
include ("footer.php");
?>

