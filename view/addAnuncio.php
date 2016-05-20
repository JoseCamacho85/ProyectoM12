<?php
include ("header.php");

if (checkSession()) {
    ?>
    <div class="container-fluid text-center">    
        <div class="row content">
            <div class="col-sm-12 text-center"> 
                <h2>Introducir Anuncio</h2>
                <div>
                    <form action="../controller/controllerAddAnuncio.php" name="formPOI">
                        <hr>
                        <p>Titulo:<input type="text" id="tituloAnuncio"></p>
                        <p>Descripción:<input type="text" id="descripcionAnuncio"></p>
                        <p>Imágen:<input type="text" id="imagenAnuncio"></p>
                        <p>Usuario (provisional):<input type="text" id="usuario"></p>
                        <p>POI:<select id="POIAnuncio" id="poiAnuncio">
                                <option>
                                    selecciona POI
                                </option>
                            </select></p>
                        <input type="submit" id="submit" value="Crear Anuncio">
                    </form>
                </div>
                <div id="seleccionados">
                    ELEMENTOS SELECCIONADOS APARECERÁN AQUÍ
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

