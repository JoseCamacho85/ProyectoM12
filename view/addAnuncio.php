<?php
include ("header.php");
include ("makeDropdownLists.php");
include("../controller/controllerIdDropdowns.php");

//include ("../controller/controllerCamposAnuncio.php");
var_dump($bitacle->getAnuncios());
?>
<script type="text/javascript"><?php include ("js/mostrarInfoAnuncio.js");?></script>
<div class="container-fluid text-center">    
    <div class="row content">
        <div class="col-sm-12 text-center"> 
            <h2>Introducir Anuncio</h2>
            <div>
                <form action="../controller/controllerAddAnuncio.php" name="formPOI">
                    <hr>
                    <p>POI:<select id="POIAnuncio" id="poiAnuncio" onchange="mostrarInfoAnuncio(this.value)">
                            <!--<option>
                                selecciona POI
                            </option>-->
                            <?php     
                            
                            makeDropdownlistPoisAnuncio();      ?>
                        </select></p>
                    <p>Titulo:<input type="text" id="tituloAnuncio"></p>
                    <p>Descripción:<input type="text" id="descripcionAnuncio"></p>
                    <p>Imágen:<input type="text" id="imagenAnuncio"></p>
                    
                    <input type="submit" id="submit" value="Crear Anuncio">
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
include ("footer.php");
?>

