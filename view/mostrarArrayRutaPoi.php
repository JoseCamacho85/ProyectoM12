<?php
include "../controller/controllerNombreDropdowns.php";

function makeDropdownlistArray($arrayPoi) {
    
    $bitacle = unserialize($_SESSION['bitacle']);
    for ($i = 0; $i < count($arrayPoi); $i++) {
        $idpoi = $arrayPoi[$i]->getIdPOI();
        $nombre = cogerNombre($bitacle->getPois(),$idpoi);
        echo "<OPTION value='".$idpoi."'>" . $nombre . "</OPTION>";
    }
}

?>