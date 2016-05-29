<nav class="navbar navbar-inverse">
    <div class="container-fluid" id="myNavbar">
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <!--<li><a href="mainUser.php"><span class="glyphicon glyphicon-pencil"></span> Datos Personales</a></li>-->
                <li><a href="showDiaryUser.php"><span class="glyphicon glyphicon-book"></span> Diarios</a></li>
                <li><a href="showPOICityUser.php"><span class="glyphicon glyphicon-map-marker"></span> Lugares visitados</a></li>
                <?php
                if ($objUsuarioConectado->getProfessional() == 1) {
                    ?>
                    <li><a href="addAnuncio.php"><span class="glyphicon glyphicon-info-sign"></span> Anuncios</a></li>
                    <?php
                }
                ?>
                <li><a href="showMisPois.php"><span class="glyphicon glyphicon-globe"></span> Mis POIs</a></li>
                <li><a href="message.php"><span class="glyphicon glyphicon-envelope"></span> Mensajes</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right" id="menuAdmin">
                <?php
                if ($objUsuarioConectado->getAdministrador() == 1) {
                    ?>
                    <li><a href="administracion.php"><span class="glyphicon glyphicon-wrench"></span> Administración</a></li>
                    <li><a href="showUsersAdmin.php"><span class="glyphicon glyphicon-search"></span> Buscar usuarios</a></li>
                    <li><a href="showEstadisticas.php"><span class="glyphicon glyphicon-stats"></span> Estadísticas</a></li>             
                        <?php
                    }
                    ?>
            </ul>
        </div>
    </div>
</nav>