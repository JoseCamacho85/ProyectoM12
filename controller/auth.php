<?php

session_start();
include("../model/functionAutoLoad.php");

$bitacle = unserialize($_SESSION['bitacle']);
if ($bitacle->validateUser($_POST['username'], $_POST['password'])) {
    $_SESSION["login"] = true;
    $user = $_POST['username'];
    $_SESSION['user'] = serialize($user);
    header("Location: ../view/mainUser.php");
} else {
    echo "<div class='container-fluid text-center'>    
    <div class='row content'>
        <div class='col-sm-12 text-center'> "
    . "<h2>Login incorrecto</h2>"
    . "<br/><br/><br/>"
    . "<img src='images/alert.png'"
    . "<br/><br/><br/><br/>"
    . "<a href='main.php'><button class='btn btn-info'>VOLVER</button></a>"
    . "<br/><br/>"
    . "</div></div></div>";
}
?>