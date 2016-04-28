<?php

//function __autoload($class_name){
require_once "/model/Business/class_Hospital.php";
//}
//Open session
session_start();
// if session hospital doesn't exist, we make it.
if (!isset($_SESSION['hospital'])) {

    $hospital = new Hospital("hospital", "granollers");
    $_SESSION['hospital'] = serialize($hospital);
} else {
    // if session exist, we unserializate it.
    $hospital = unserialize($_SESSION['hospital']);
}
header("Location:view/form_Login.php");
?>