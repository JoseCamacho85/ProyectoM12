<?php

//function __autoload($class_name){
require_once "/model/Bussiness/classBitacle.php";
//}
//Open session
session_start();
// if session hospital doesn't exist, we make it.
if (!isset($_SESSION['bitacle'])) {

    $hospital = new Bitacle("bitacle");
    $_SESSION['bitacle'] = serialize($hospital);
} else {
    // if session exist, we unserializate it.
    $hospital = unserialize($_SESSION['hospital']);
}
header("Location:view/main.php");
?>