<?php
//include ("header.php");
//include ("makeDropdownLists.php");
//include("../controller/controllerIdDropdowns.php");
//include("../controller/validatorTipoUsuario.php");
//include '../controller/controllerVerDetalleUsuario.php';
//include_once("../model/DAO/classDB.php");
//require_once('Structures/DataGrid.php');
?>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="collapse navbar-collapse navbar-ex1-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="mainUser.php">Datos Personales</a></li>
                <li><a href="showDiaryUser.php">Diarios</a></li>
                <li><a href="showPOICityUser.php">Lugares visitados</a></li>
                <?php
                //include("../controller/validatorTipoUsuario.php");
                if ($objUsuarioConectado->getProfessional() == 1) {
                    ?>
                    <li><a href="addAnuncio.php">Anuncios</a></li>
                    <?php
                }
                ?>
                <?php
                if ($objUsuarioConectado->getAdministrador() == 1) {
                    ?>
                    <li><a href="administracion.php">Administración</a></li>
                    <li><a href="showUsersAdmin.php">Buscar usuarios</a></li>             
                    <?php
                }
                ?>
                <li><a href="showMisPois.php">Mis POIs</a></li>
                <li><a href="message.php">Mensajes Privados</a></li>
            </ul>
        </div>
    </div>
</nav>