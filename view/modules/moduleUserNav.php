<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="collapse navbar-collapse navbar-ex1-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="mainUser.php">Datos Personales</a></li>
                <li><a href="showDiaryUser.php">Diarios</a></li>
                <li><a href="showPOICityUser.php">Lugares visitados</a></li>
                <?php
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
                    <li><a href="showEstadisticas.php">Estadísticas</a></li>             
                    <?php
                }
                ?>
                <li><a href="showMisPois.php">Mis POIs</a></li>
                <li><a href="message.php">Mensajes Privados</a></li>
            </ul>
        </div>
    </div>
</nav>