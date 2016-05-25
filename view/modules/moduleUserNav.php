<?php
//include ("header.php");
include ("makeDropdownLists.php");
include("../controller/controllerIdDropdowns.php");
include("../controller/validatorTipoUsuario.php");
?>
<ul class="nav nav-pills">
    <!--li><a href="#">DATOS PERSONALES</a></li-->
    <li><a href="showDiaryUser.php">Diarios</a></li>
    <li><a href="showPOICityUser.php">Lugares visitados</a></li>
    <?php
    include("../controller/validatorTipoUsuario.php");
    if ($objUsuarioConectado->getProfessional() == 1) {
        ?>
        <li><a href="addAnuncio.php">Añadir Anuncios</a></li>
        <?php
    }
    ?>
    <?php
    if ($objUsuarioConectado->getAdministrador() == 1) {
        ?>
        <li><a href="administracion.php">Administración</a></li>
        <?php
    }
    ?>
    <li><a href="showMisPois.php">Mis POIs</a></li>
    <li><a href="message.php">Mensajes Privados</a></li>
</ul>