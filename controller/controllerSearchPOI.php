<?php

session_start();
include("../model/functionAutoLoad.php");
include("controllerIdDropdowns.php");
include("validations/validateNullfields.php");
include("../view/modules/modalPOI.php");

$bitacle = unserialize($_SESSION['bitacle']);

$tipo = null;
$transporte = null;
$entorno = null;
$pais = null;
$ciudad = null;

$fields = [];
$fieldNames = [];

$arrayPOI = $bitacle->getPois();
$arrayTipo = $bitacle->getTipos();
$arrayTransporte = $bitacle->getTransportes();
$arrayEntorno = $bitacle->getEntornos();
$arrayPais = $bitacle->getPaises();
$arrayCiudad = $bitacle->getCiudades();

if (isset($_REQUEST['checkTipoPOI'])) {
    $tipo = $_REQUEST['selectTipoPOI'];
    array_push($fields, $tipo);
    array_push($fieldNames, "id_tipo");
}
if (isset($_REQUEST['checkTransportePOI'])) {
    $transporte = $_REQUEST['selectTransportePOI'];
    array_push($fields, $transporte);
    array_push($fieldNames, "id_transporte");
}
if (isset($_REQUEST['checkEntornoPOI'])) {
    $entorno = $_REQUEST['selectEntornoPOI'];
    array_push($fields, $entorno);
    array_push($fieldNames, "id_entorno");
}
if (isset($_REQUEST['checkPaisPOI'])) {
    $pais = $_REQUEST['selectPaisPOI'];
    array_push($fields, $pais);
    array_push($fieldNames, "id_pais");
}
if (isset($_REQUEST['checkCiudadPOI'])) {
    $ciudad = $_REQUEST['selectCiudadPOI'];
    $id_ciudad = cogerId($arrayCiudad, $ciudad);
    array_push($fields, $id_ciudad);
    array_push($fieldNames, "id_ciudad");
}
$arrayQuery = $bitacle->crearQuery($fields, $fieldNames);
if ($arrayQuery == null) {
    echo "no hay coincidencias";
} else {

    for ($i = 0; $i < count($arrayQuery); $i++) {
        showTablePOI($arrayQuery[$i]->getId(), $arrayQuery[$i]->getFoto(), $arrayQuery[$i]->getNombre(), $arrayQuery[$i]->getUrl(), $arrayQuery[$i]->getPrecio(), $arrayQuery[$i]->getHorario());
    }
}




//} else {
//echo "¡no hay campos!";
//header("location:../view/searchPOI.php");
//}
?>