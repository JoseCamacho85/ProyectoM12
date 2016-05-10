<?php
include ("header.php");
?>
<div class="container-fluid text-center">    
    <div class="row content">
        <div class="col-sm-12 text-center"> 
            <h1>Introducir Ruta</h1>
            <div>
                <form action="" name="formPOI">
                    <hr>
                    <p>Nombre:<input type="text" id="nombreRuta"></p>
                    <p>Descripción:<input type="text" id="descripcionRuta"></p>
                   
                    <p>POI:<select id="POIRuta">
                        <option>
                            selecciona POI
                        </option>
                    </select></p>
                    <input type="submit" id="submitRuta" value="Crear Ruta">
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