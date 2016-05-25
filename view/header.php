<?php
session_start();
include("../model/functionAutoLoad.php");
include ("../controller/checkSession.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Bitacle -- Tu red de viajes</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.validate.js"></script>
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <script type="text/javascript" src="js/animationDropdown.js"></script>
        <link rel="stylesheet" type="text/css" href="css/estilosbitacle.css">
        <script type="text/javascript" src="js/animation.js"></script>
        <link rel="stylesheet" type="text/css" href="css/flexslider.css">
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <script type="text/javascript" src="../controller/validations/validatePOIcliente.js"></script> 
        <script type="text/javascript" src="../controller/validations/validateUsuarioCliente.js"></script>
        <script type="text/javascript" src="../controller/validations/validateDiarioCliente.js"></script> 

    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar" aria-expanded="false">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="main.php"></a>
                </div>
                <div class="collapse navbar-collapse navbar-ex1-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li ><a href="main.php"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
                        <li ><a href="showPOI.php"><span class="glyphicon glyphicon-cutlery"></span> POI's</a></li>
                        <li><a href="showRutas.php"><span class="glyphicon glyphicon-road"></span> Rutas</a></li>
                        <li><a href="showForo.php"><span class="glyphicon glyphicon-comment"></span> Foro</a></li>
                    </ul>
                    <?php
                    if (!isset($_SESSION['bitacle'])) {

                        $bitacle = new Bitacle("bitacle");
                        $_SESSION['bitacle'] = serialize($bitacle);
                    } else {
                        // if session exist, we unserializate it.
                        $bitacle = unserialize($_SESSION['bitacle']);
                    }

                    if (!isset($_SESSION['user'])) {
                        $user = "";
                        include("modules/login.php");
                    } else {
                        $user = unserialize($_SESSION['user']);
                        include("modules/userNav.php");
                    }
                    ?>

                </div>
            </div>
        </nav>