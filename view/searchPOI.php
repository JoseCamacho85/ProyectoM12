<?php
include ("header.php");
include 'makeDropdownLists.php';
?>
<form action="../controller/controllerSearchPOI.php" type="POST">
    <div class="container col-md-12" style="background: #E7FFFF;">    
        <div class="col-md-offset-1 col-md-2">
            <p>Tipo <input type="checkbox" id="checkTipoPOI" name="checkTipoPOI"></p>
            <select id="selectTipoPOI" name="selectTipoPOI" class="form-control" style="display:none">
            <?php makeDropdownlistTipos(); ?>
            </select>
        </div>
        <div class="col-md-2">
            <p>Transporte <input type="checkbox" id="checkTransportePOI" name="checkTransportePOI"></p>
            <select id="selectTransportePOI" name="selectTransportePOI"  class="form-control" style="display:none">
                <?php makeDropdownlistTransportes(); ?>
            </select>
        </div>
        <div class="col-md-2">
            <p>Entorno  <input type="checkbox" id="checkEntornoPOI" name="checkEntornoPOI"></p>
            <select id="selectEntornoPOI" name="selectEntornoPOI"  class="form-control" style="display:none">
            <?php makeDropdownlistEntornos(); ?>
            </select>
        </div>
        <div class="col-md-2">
            <p>Pais  <input type="checkbox" id="checkPaisPOI" name="checkPaisPOI"></p>
            <select id="selectPaisPOI" name="selectPaisPOI"  class="form-control" style="display:none" onchange="cambioPais(this.value)">
            <?php makeDropdownlistPaises(); ?>
            </select>
        </div>
        <div class="col-md-2">
            <p>Ciudad  <input type="checkbox" id="checkCiudadPOI" name="checkCiudadPOI"></p>
            <select id="selectCiudadPOI" name="selectCiudadPOI"  class="form-control" style="display:none">
            <?php makeDropdownlistCiudades(); ?>
            </select>
        </div>
    </div>
    <input type="submit" value="Buscar Puntos de interes" class="btn btn-info"/>
    
</form>
<a href="showPOI.php"><button class="btn btn-info">VOLVER</button></a>
<?php
include ("footer.php");
?>