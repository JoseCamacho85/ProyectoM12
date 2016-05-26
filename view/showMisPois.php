<?php
include ("header.php");
include ("makeDropdownLists.php");
include("../controller/controllerIdDropdowns.php");
include("../controller/validatorTipoUsuario.php");

include 'modules/moduleUserNav.php';
?>
<script type="text/javascript"><?php include ("js/mostrarMisPois.js"); ?></script>
<div class="container-fluid text-center">    
    <div class="row content">
        <div class="col-sm-12 text-center"> 
            <h2>mis puntos de interés</h2>
            <div>
                <form action="../controller/controllerMisPois.php" name="formPOI">
                    <hr>
                    <p>POI: <select name="MiPoi" onchange="mostrarMisPois(this.value)">
                            <!--<option>
                                selecciona POI
                            </option>-->
                            <?php makeDropdownlistPoisUser(); ?>
                        </select></p>
                    <p>Nombre:<input type="text" id="nombrePoi" name="nombrePoi"/></p>
                    <p>Foto:<input type="text" id="fotoPoi" name="fotoPoi"/></p>
                    <p>Descripción:<input type="textarea" id="descripcionPoi" name="descripcionPoi"/></p>
                    <p>URL:<input type="text" id="urlPoi" name="urlPoi" /></p>
                    <p>Precio:<input type="text" id="precioPoi" name="precioPoi"></p>
                    <p>Horario:<input type="text" id="horarioPoi" name="horarioPoi"></p>

                    <input type="submit" id="modificarPoi" name= "modificarPoi" value="Modificar Poi">
                    <div id="botones">
                        <input type="submit" id="eliminarPoi" name="eliminarPoi" value="Eliminar Poi">
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
include ("footer.php");
?>