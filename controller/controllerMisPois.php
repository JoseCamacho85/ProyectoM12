<?php

session_start();
include("../model/functionAutoLoad.php");
include("controllerIdDropdowns.php");


$bitacle = unserialize($_SESSION['bitacle']);
$user = unserialize($_SESSION['user']);
//$bitacle = new Bitacle("bitacle");

//if (isset($_REQUEST['submit'])) {
    //Recover form data
    $id_poi = $_REQUEST['MiPoi'];
    $nombre = $_REQUEST['nombrePoi'];
    $foto = $_REQUEST['fotoPoi'];
    $descripcion = $_REQUEST['descripcionPoi'];
    $url = $_REQUEST['urlPoi'];
    $precio = $_REQUEST['precioPoi'];
    $horario = $_REQUEST['horarioPoi'];
 
if (isset($_REQUEST["modificarPoi"])){
        try {
            $bitacle->modificarPoi($id_poi, $nombre, $foto, $descripcion, $url, $precio, $horario);
            include("../view/modules/refresh.php");
            echo $nombre . " modificado";

            //showMessage("Usuario ". $username ." creado correctamente");	
            //header("Location: ../index.php");
            $_SESSION['bitacle']=serialize($bitacle);		
        } catch (Exception $e) {
            showMessage($e->getMessage());
        }
        header("Location: ../view/showMisPois.php");
    }

if (isset($_REQUEST["eliminarPoi"])){
        try {
            $bitacle->eliminarPoi($id_poi);
            $_SESSION['bitacle']=serialize($bitacle);
            echo $nombre . " eliminado";

        } catch (Exception $e) {
            showMessage($e->getMessage());
        }

        header("Location: ../view/showMisPois.php");
    }
    
?>