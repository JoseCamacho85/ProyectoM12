<?php

session_start();

include("../model/functionAutoLoad.php");


$bitacle = unserialize($_SESSION['bitacle']);

try {

    $bitacle->eliminarRuta($_REQUEST['id']);


    $_SESSION['bitacle'] = serialize($bitacle);
    header("Location: ../view/showRutas.php");
} catch (Exception $e) {
    
}
?>