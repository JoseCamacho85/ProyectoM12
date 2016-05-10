<?php
include ("header.php");
?>
<div class="container-fluid text-center">    
    <div class="row content">
        <div class="col-sm-12 text-center"> 
            <h1>Introducir Anuncio</h1>
            <div>
                <form action="" name="formPOI">
                    <hr>
                    <p>Titulo:<input type="text" id="nombreAnuncio"></p>
                    <p>Descripción:<input type="text" id="descripcionAnuncio"></p>
                    <p>Imágen:<input type="text" id="descripcionAnuncio"></p>
                    <p>POI:<select id="POIAnuncio">
                            <option>
                                selecciona POI
                            </option>
                        </select></p>
                    <input type="submit" id="submitRuta" value="Crear Anuncio">
                </form>
            </div>
            <div id="seleccionados">
                ELEMENTOS SELECCIONADOS APARECERÁN AQUÍ
            </div>
        </div>
    </div>
</div>

<?php
include ("footer.php");
?>

