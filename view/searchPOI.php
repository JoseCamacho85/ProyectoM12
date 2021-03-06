<?php
include ("header.php");
include 'makeDropdownLists.php';
if (checkSession()) {
    include '../controller/controllerVerDetalleUsuario.php';
    include("../controller/validatorTipoUsuario.php");
    include 'modules/moduleUserNav.php';
}
?>
<!--<a href="showPOI.php"><button class="btn btn-info">Volver</button></a>--> 
<div class="container-fluid text-center">    
    <div class="row content">
        <div class="col-sm-12 text-center">
            <h2>búsqueda avanzada</h2>
            <div>
                <!-- Script para generarar dropdown ciudades-->
                <script type="text/javascript"><?php include ("js/cambioPais.js"); ?></script>
                <div class="container col-md-12">    
                    <div class="col-md-offset-1 col-md-2">
                        <p>Tipo <input type="checkbox" id="checkTipoPOI" name="checkTipoPOI"></p>
                        <select id="selectTipoPOI" id="selectTipoPOI" name="selectTipoPOI" class="form-control" style="display:none">
                            <?php makeDropdownlistTipos(); ?>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <p>Transporte <input type="checkbox" id="checkTransportePOI" name="checkTransportePOI"></p>
                        <select id="selectTransportePOI" id="selectTransportePOI" name="selectTransportePOI"  class="form-control" style="display:none">
                            <?php makeDropdownlistTransportes(); ?>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <p>Entorno  <input type="checkbox" id="checkEntornoPOI" name="checkEntornoPOI"></p>
                        <select id="selectEntornoPOI" id="selectEntornoPOI" name="selectEntornoPOI"  class="form-control" style="display:none">
                            <?php makeDropdownlistEntornos(); ?>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <p>Pais  <input type="checkbox" id="checkPaisPOI" name="checkPaisPOI"></p>
                        <select id="selectPaisPOI" id="selectPaisPOI" name="selectPaisPOI"  class="form-control" style="display:none" onchange="cambioPais(this.value)">
                            <?php makeDropdownlistPaises(); ?>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <p>Ciudad  <input type="checkbox" id="checkCiudadPOI" name="checkCiudadPOI"></p>
                        <select id="selectCiudadPOI" id="selectCiudadPOI" name="selectCiudadPOI"  class="form-control" style="display:none">
                            <?php makeDropdownlistCiudades(); ?>
                        </select>
                    </div>
                </div>
                <p><button id="searchPOI" class="btn btn-info">Buscar puntos de interés</button></p>            
            </div>
        </div>
        <div class="camposOb" id="seleccionados">
            El resultado de la búsqueda aparecerá aquí
        </div>
    </div>
</div>
<script type="text/javascript"><?php include ("js/busquedaAvanzada.js"); ?></script>
<?php
include ("footer.php");
?>