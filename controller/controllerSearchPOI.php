<?php

//echo $_REQUEST['tipoPOI'];
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
    //echo $_REQUEST['selectTipoPOI'];
    $tipo = $_REQUEST['selectTipoPOI'];
    //$id_tipo = cogerId($arrayTipo, $tipo);
    array_push($fields, $tipo);
    array_push($fieldNames, "id_tipo");
}
if (isset($_REQUEST['checkTransportePOI'])) {
    //echo $_REQUEST['selectTransportePOI'];
    $transporte = $_REQUEST['selectTransportePOI'];
    //$id_transporte = cogerId($arrayTransporte, $transporte);
    array_push($fields, $transporte);
    array_push($fieldNames, "id_transporte");
}
if (isset($_REQUEST['checkEntornoPOI'])) {
    //echo $_REQUEST['selectEntornoPOI'];
    $entorno = $_REQUEST['selectEntornoPOI'];
    //$id_entorno = cogerId($arrayEntorno, $entorno);
    array_push($fields, $entorno);
    array_push($fieldNames, "id_entorno");
}
if (isset($_REQUEST['checkPaisPOI'])) {
    //echo $_REQUEST['selectPaisPOI'];
    $pais = $_REQUEST['selectPaisPOI'];
    //$id_pais = cogerId($arrayPais, $pais);
    array_push($fields, $pais);
    array_push($fieldNames, "id_pais");
}
if (isset($_REQUEST['checkCiudadPOI'])) {
    //echo $_REQUEST['selectCiudadPOI'];
    $ciudad = $_REQUEST['selectCiudadPOI'];
    //$id_ciudad = cogerId($arrayCiudad, $ciudad);
    array_push($fields, $ciudad);
    array_push($fieldNames, "id_ciudad");
}
//echo $_REQUEST['selectTipoPOI'];
//echo $_REQUEST['selectTransportePOI'];
//echo $_REQUEST['selectEntornoPOI'];
//echo $_REQUEST['selectPaisPOI'];
//echo $_REQUEST['selectCiudadPOI'];
//if (validateNullfields($fields)) {
//Retorna una array de POIS        
$arrayQuery = $bitacle->crearQuery($fields, $fieldNames);
if ($arrayQuery == null) {
    echo "no hay coincidencias";
} else {
    
  
    for ($i = 0; $i < count($arrayQuery); $i++) {
        showTablePOI($arrayQuery[$i]->getId(),$arrayQuery[$i]->getFoto(),$arrayQuery[$i]->getNombre(),$arrayQuery[$i]->getUrl(),
                $arrayQuery[$i]->getPrecio(),$arrayQuery[$i]->getHorario());
        
    }
}




//} else {
//echo "¡no hay campos!";
//header("location:../view/searchPOI.php");
//}
?>