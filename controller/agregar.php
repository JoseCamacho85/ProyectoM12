<?php
session_start();

include("conexionBD.php");
include("../view/header.php");
include("controllerIdDropdowns.php");

$bitacle = unserialize($_SESSION['bitacle']);
$user = unserialize($_SESSION['user']);
//$bitacle = new Bitacle("bitacle");

if (isset($_POST["submit"])) {
    if (!empty($_POST['mensaje'])) {
//        $autor = $_POST['autor'];
        $titulo = $_POST['titulo'];
        $mensaje = $_POST['mensaje'];
        $respuestas = $_POST['respuestas'];
        $identificador = $_POST['identificador'];
        $fecha = date("y-m-d");

//aplicar id de usuario logeado
$usuarios = $bitacle->getUsers();
$id_usuario = cogerIdUsuario($usuarios, $user);

        //Evitamos que el usuario ingrese HTML
        $mensaje = htmlentities($mensaje);
        echo "identificador:";
        echo $identificador;

        //Grabamos el mensaje en la base de datos.
        $query = "INSERT INTO foro (autor, titulo, mensaje, identificador, fecha, ult_respuesta) VALUES ('$id_usuario', '$titulo', '$mensaje', '$identificador','$fecha','$fecha')";

        echo $query;
        echo "identificador:";
        echo $identificador;
        $result = $mysqli->query($query);

        /* si es un mensaje en respuesta a otro actualizamos los datos */
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