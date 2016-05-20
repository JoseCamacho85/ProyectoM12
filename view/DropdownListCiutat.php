<?php

session_start();
include("../model/functionAutoLoad.php");
include("../controller/controllerIdDropdowns.php");
$bitacle = unserialize($_SESSION['bitacle']);
$ciudad = $bitacle->getCiudades();
$pais = $bitacle->getPaises();

$id_com = $_POST["data"];

$aux = cogerId($pais, $id_com);
echo "<OPTION selected='selected'>Selecciona una ciudad</OPTION>";
for ($i = 0; $i < count($bitacle->getCiudades()); $i++) {

    if ($bitacle->getCiudades()[$i]->getId_pais() == $aux) {
        
        $nombre = $bitacle->getCiudades()[$i]->getNombre();
        echo "<OPTION>" . $nombre . "</OPTION>";
    }
}
?>