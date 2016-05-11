<?php
include ("header.php");
?>
<div class="container" style="background: #E7FFFF;">    
    <div class="col-md-offset-1 col-md-2">
        <p>Tipo <input type="checkbox" id="checkTypePOI"></p>
        <select id="typePOI"class="form-control" style="display:none">
        </select>
    </div>
    <div class="col-md-2">
        <p>Transporte <input type="checkbox" id="checkTransportPOI"></p>
        <select id="transportPOI" class="form-control" style="display:none">
        </select>
    </div>
    <div class="col-md-2">
        <p>Entorno  <input type="checkbox" id="checkEntornPOI"></p>
        <select id="entornPOI" class="form-control" style="display:none">
        </select>
    </div>
    <div class="col-md-2">
        <p>Pais  <input type="checkbox" id="checkCountryPOI"></p>
        <select id="countryPOI" class="form-control" style="display:none">
        </select>
    </div>
    <div class="col-md-2">
        <p>Ciudad  <input type="checkbox" id="checkCityPOI"></p>
        <select id="cityPOI" class="form-control" style="display:none">
        </select>
    </div>
</div>
<?php
include ("footer.php");
?>