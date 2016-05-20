<form method="post" action="../controller/controllerAddRutaPOI.php">
    <input type="hidden" name="idPoi" value='<?php echo $idPOI; ?>'/>
    <select name="idRuta">
        <?php makeDropdownlistRuta(); ?>
    </select>
    <button id="addRuta">Añadir Punto de interés a ruta</button>
    <!--input type="submit" value="Enviar"-->

</form>
<form method="post" action="../controller/controllerAddDiaryPOI.php">
    <input type="hidden" id="idPoi" name="idPoi" value='<?php echo $idPOI; ?>'/>
    <select id="idDiario" id="idDiario" name="idDiario">
        <?php makeDropdownlistDiarios(); ?>
    </select>
    <button id="addDiario">Añadir Punto de interés a diario</button>
    <!--input type="submit" value="Enviar"-->

</form>