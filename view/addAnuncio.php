<?php
include ("header.php");
include ("makeDropdownLists.php");
include("../controller/controllerIdDropdowns.php");
include("../controller/validatorTipoUsuario.php");
include 'modules/moduleUserNav.php';
if ((checkSession()) && ($objUsuarioConectado->getProfessional() == 1)) {
    ?>
    <script type="text/javascript"><?php include ("js/mostrarInfoAnuncio.js"); ?></script>
    <div class="container">    
        <div class="row content">
            <div class="col-md-12 col-sm-12">  
                <h2>añadir anuncio</h2>
                <hr>
                <div class="cuadro">
                    <form action="../controller/controllerAddAnuncio.php" name="formAnuncio" id="formAnuncio">
                        <p><span class="titulos">POI:</span><select id="POIAnuncio" name="POIAnuncio" onchange="mostrarInfoAnuncio(this.value)">
                                <?php makeDropdownlistPoisUser(); ?>
                            </select><span class="erroresAnuncioSelect"></span></p>
                        <p><span class="titulos">Foto: </span><input type="text" size="21" name="imagenAnuncio" id="imagenAnuncio" value="Desactivado temporalmente" readonly></p>
                        <p><span class="titulos">Título: </span><input type="text" id="tituloAnuncio" name="tituloAnuncio" ></p>
                        <p><span class="titulos">Descripción:</span></p><textarea rows="4" cols="50" id="descripcionAnuncio" name="descripcionAnuncio"></textarea>
                        <p></p>
                        <input type="submit" id="modificarAnuncio" name= "modificarAnuncio" value="Modificar Anuncio" class="btn btn-info">
                        <div id="botones">
                            <input type="submit" id="crearAnuncio" name="crearAnuncio" value="Crear Anuncio" class="btn btn-info"> 
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

