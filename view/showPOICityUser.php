<?php
include ("header.php");

if (checkSession()) {
    include_once("../model/DAO/classDB.php");
    require_once('Structures/DataGrid.php');
    ?>

    <h2>LUGARES VISITADOS</h2>

    <a href="mainUser.php"><button class="btn btn-info">Datos personales</button></a>
    <a href="showDiaryUser.php"><button class="btn btn-info">Diarios</button></a>
    <a href="mainUser.php"><button class="btn btn-info">VOLVER</button></a>

    <?php
} else {
    header("Location: formErrorSession.php");
}
include ("footer.php");
?>