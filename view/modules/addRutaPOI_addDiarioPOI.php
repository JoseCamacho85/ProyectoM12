<div id="anadirPoiRutas">Añade este POI a tus rutas o diarios:</div>
<form method="post" action="../controller/controllerAddRutaPOI.php">
    <input type="hidden" name="idPoi" id="idPoi" value='<?php echo $idPOI; ?>'/>
    <select name="idRuta" id ="idRuta">
        <?php makeDropdownlistRutasUser(); ?>
    </select>
    <button id="addRuta">Añadir Punto de interés a ruta</button>
    <!--<input type="submit" value="Añadir Punto de interés a ruta">-->

</form>
<form method="post" action="../controller/controllerAddDiaryPOI.php">
    <input type="hidden" id="idPoi" name="idPoi" value='<?php echo $idPOI; ?>'/>
    <select id="idDiario" id="idDiario" name="idDiario">
        <?php makeDropdownlistDiariosUser(); ?>
    </select>
    <button id="addDiario">Añadir Punto de interés a diario</button>
    <!--input type="submit" value="Enviar"-->

</form>