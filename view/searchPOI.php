<?php
include ("header.php");
?>
<form action="../controller/controllerSearchPOI.php" type="POST">
    <div class="container col-md-12" style="background: #E7FFFF;">    
        <div class="col-md-offset-1 col-md-2">
            <p>Tipo <input type="checkbox" id="checkTypePOI"></p>
            <select id="typePOI" name="typePOI" class="form-control" style="display:none">
            </select>
        </div>
        <div class="col-md-2">
            <p>Transporte <input type="checkbox" id="checkTransportPOI"></p>
            <select id="transportPOI" name="transportPOI"  class="form-control" style="display:none">
            </select>
        </div>
        <div class="col-md-2">
            <p>Entorno  <input type="checkbox" id="checkEntornPOI"></p>
            <select id="entornPOI" name="entornPOI"  class="form-control" style="display:none">
            </select>
        </div>
        <div class="col-md-2">
            <p>Pais  <input type="checkbox" id="checkCountryPOI"></p>
            <select id="countryPOI" name="countryPOI"  class="form-control" style="display:none">
            </select>
        </div>
        <div class="col-md-2">
            <p>Ciudad  <input type="checkbox" id="checkCityPOI"></p>
            <select id="cityPOI" name="cityPOI"  class="form-control" style="display:none">
            </select>
        </div>
    </div>
    <input name="search" type="submit"/>
</form>
<a href="showPOI.php"><button class="btn btn-info">volver a pantalla de POIs</button></a>
<?php
include ("footer.php");
?>