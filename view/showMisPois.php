<?php
include ("header.php");
include ("makeDropdownLists.php");
include("../controller/controllerIdDropdowns.php");
include("../controller/validatorTipoUsuario.php");
include 'modules/moduleUserNav.php';
?>
<script type="text/javascript"><?php include ("js/mostrarMisPois.js"); ?></script>
<div class="container">    
    <div class="row content">
        <div class="col-md-12"> 
            <h2>mis puntos de interés</h2>
            <div class="cuadro">
                <form action="../controller/controllerMisPois.php" name="formPOI">

                    <p>POI: <select name="MiPoi" onchange="mostrarMisPois(this.value)">
                            <?php makeDropdownlistPoisUser(); ?>
                        </select></p>
                    <p><span class="titulos">Nombre: </span><input type="text" id="nombrePoi" name="nombrePoi"/></p>
                    <p><span class="titulos">Foto: </span><input type="text" id="fotoPoi" name="fotoPoi"/></p>
                    <p><span class="titulos">Descripción: </span></p><textarea rows="4" cols="50" id="descripcionPoi" name="descripcionPoi"></textarea>
                    <p><span class="titulos">URL: </span><input type="text" size="50" id="urlPoi" name="urlPoi" /></p>
                    <p><span class="titulos">Precio: </span><input type="text" size="50" id="precioPoi" name="precioPoi"></p>
                    <p><span class="titulos">Horario: </span><input type="text" size="50" id="horarioPoi" name="horarioPoi"></p>
                    <div class="centrar">
                        <div id="botones">
                            <input type="submit" id="modificarPoi" name= "modificarPoi" value="Modificar Poi" class="btn btn-info">
                            <input type="submit" id="eliminarPoi" name="eliminarPoi" value="Eliminar Poi" class="btn btn-info">
                        </div>
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