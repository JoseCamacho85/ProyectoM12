<?php

session_start();

include("conexionBD.php");
//include("../view/header.php");
include("controllerIdDropdowns.php");

$bitacle = unserialize($_SESSION['bitacle']);
$user = unserialize($_SESSION['user']);

if (isset($_POST["submit"])) {
    if (!empty($_POST['mensaje'])) {
        $titulo = $_POST['titulo'];
        $mensaje = $_POST['mensaje'];
        $respuestas = $_POST['respuestas'];
        $identificador = $_POST['identificador'];
        $fecha = date("d-m-y");

        $mensaje = htmlentities($mensaje);
        echo "identificador:";
        echo $identificador;

        $query = "INSERT INTO foro (autor, titulo, mensaje, identificador, fecha, ult_respuesta) VALUES ('$user', '$titulo', '$mensaje', '$identificador','$fecha','$fecha')";

        echo $query;
        echo "identificador:";
        echo $identificador;
        $result = $mysqli->query($query);

        if ($identificador != 0) {
            $query2 = "UPDATE foro SET respuestas=respuestas+1 WHERE ID='$identificador'";
            $result2 = $mysqli->query($query2);
            echo $query2;
            Header("Location: ../view/foro.php?id=$identificador");
            exit();
        }
        Header("Location: ../view/showForo.php");
    }
}
?>