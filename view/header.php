<?php
include ("../controller/checkSession.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Bitacle -- Tu red de viajes</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <link type="text/css" href="css/estilos.css">
        <script src="js/jquery.js"></script>
        <script src="js/animation.js"></script>
        <script src="js/validations.js"></script>

    </head>
    <body>
        <!--INICIO DE NAVBAR-->
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="main.php">Bitacle</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="main.php"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
                        <li><a href="showPOI.php"><span class="glyphicon glyphicon-cutlery"></span> POI's</a></li>
                        <li><a href="showRutas.php"><span class="glyphicon glyphicon-road"></span> Rutas</a></li>
                        <li><a href="showForo.php"><span class="glyphicon glyphicon-comment"></span> Foro</a></li>
                    </ul>
                    <?php
                    if (checkSession()) {
                        include("modules/login.html");
                    } else {
                        include("modules/userNav.php");
                    }
                    ?>
                </div>
            </div>
        </nav>