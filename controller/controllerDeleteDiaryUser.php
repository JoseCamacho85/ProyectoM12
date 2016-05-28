<?php

session_start();

include("../model/functionAutoLoad.php");


$bitacle = unserialize($_SESSION['bitacle']);

try {

    $bitacle->eliminarDiaryUser($_REQUEST['id']);


    $_SESSION['bitacle'] = serialize($bitacle);
    header("Location: ../view/showDiaryUser.php");
} catch (Exception $e) {
    
}
?>