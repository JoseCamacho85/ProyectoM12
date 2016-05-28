<?php

session_start();

include("../model/functionAutoLoad.php");


$bitacle = unserialize($_SESSION['bitacle']);

try {

    $bitacle->eliminarPoi($_REQUEST['id']);


    $_SESSION['bitacle'] = serialize($bitacle);
    header("Location: ../view/showPOI.php");
} catch (Exception $e) {
    
}
?>