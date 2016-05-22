<?php
include ("header.php");
include ("makeDropdownLists.php");
include("../controller/controllerIdDropdowns.php");

//include ("../controller/controllerCamposAnuncio.php");

?>
<style type="text/css">
    #crearAnuncio{
        display:none;
    }
    #modificarAnuncio{
        display:none;
    }
</style>
<script type="text/javascript"><?php include ("js/mostrarInfoAnuncio.js");?></script>
<div class="container-fluid text-center">    
    <div class="row content">
        <div class="col-sm-12 text-center"> 
            <h2>Introducir Anuncio</h2>
            <div>
                <form action="../controller/controllerAddAnuncio.php" name="formPOI">
                    <hr>
                    <p>POI:<select id="POIAnuncio" name="POIAnuncio" onchange="mostrarInfoAnuncio(this.value)">
                            <!--<option>
                                selecciona POI
                            </option>-->
                            <?php     
                            
                            makeDropdownlistPoisUser();      ?>
                        </select></p>
                    <p>Titulo:<input type="text" id="tituloAnuncio" name="tituloAnuncio" ></p>
                    <p>Descripción:<input type="text" id="descripcionAnuncio" name="descripcionAnuncio"></p>
                    <p>Imágen:<input type="text" id="imagenAnuncio" name="imagenAnuncio"></p>
                    
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
include ("footer.php");
?>

