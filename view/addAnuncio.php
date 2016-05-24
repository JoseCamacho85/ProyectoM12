<?php
include ("header.php");
include ("makeDropdownLists.php");
include("../controller/controllerIdDropdowns.php");
include("../controller/validatorTipoUsuario.php");

if ((checkSession())&&($objUsuarioConectado->getProfessional()==1)) {

?>
<style type="text/css">
    #crearAnuncio{
        display:none;
    }
    #modificarAnuncio{
        display:none;
    }
</style>
<script type="text/javascript"><?php include ("js/mostrarInfoAnuncio.js"); ?></script>
<div class="container-fluid text-center">    
    <div class="row content">
        <div class="col-sm-12 text-center"> 
            <h2>Introducir Anuncio</h2>
            <div>
                <?php
                    include ("./modules/addFotoAnuncio.php");
                    ?>
                <p><span>Foto: </span><input type="text" name="fotoPoi" id="fotoPoi" value="<?php echo $fotoSubida; ?>"></p>
                <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post" enctype="multipart/form-data" name="inscripcion">
                    <input class="center-block" type="file" name="archivo[]" multiple="multiple">
                    <input type="submit" value="Subir imagen"  class="trig">
                </form>
                <form action="../controller/controllerAddAnuncio.php" name="formPOI">
                    <hr>
                    <p>POI:<select id="POIAnuncio" name="POIAnuncio" onchange="mostrarInfoAnuncio(this.value)">
                            <!--<option>
                                selecciona POI
                            </option>-->
                            <?php makeDropdownlistPoisUser(); ?>
                        </select></p>
                    <p>Titulo:<input type="text" id="tituloAnuncio" name="tituloAnuncio" ></p>
                    <p>Descripción:<input type="text" id="descripcionAnuncio" name="descripcionAnuncio"></p>
                    <p><span>Foto: </span><input type="text" name="imagenAnuncio" id="imagenAnuncio" value="<?php echo $fotoSubida; ?>"></p>

                    <input type="submit" id="modificarAnuncio" name= "modificarAnuncio" value="Modificar Anuncio">
                    <div id="botones">
                        <input type="submit" id="crearAnuncio" name="crearAnuncio" value="Crear Anuncio">
                    </div>
                </form>



            </div>
            <div id="seleccionados">
                ELEMENTOS SELECCIONADOS APARECERÁN AQUÍ
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

