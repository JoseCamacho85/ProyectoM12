<?php
include ("header.php");

if (checkSession()) {
    include_once("../model/DAO/classDB.php");
    require_once('Structures/DataGrid.php');
    include("../controller/controllerIdDropdowns.php");
    include("../controller/validatorTipoUsuario.php");
    include 'modules/moduleUserNav.php';
    ?>

    <h2>lugares visitados</h2>
    <div class="col-md-4 col-md-offset-4">   
        <?php include ("mostrarCiudadesVisitadas.php"); ?>

    </div>


<?php
    } else {
        header("Location: formErrorSession.php");
    }
    include ("footer.php");
    ?>