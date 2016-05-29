<nav class="navbar navbar-inverse" id='navRegistrado'>
    <div class="container-fluid" id="myNavbar">
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="glyphicon glyphicon-book"></span> Diarios <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="showDiaryUser.php">Ver diarios<i class="icon-arrow-right"></i></a>
                            <a href="addDiario.php">Añadir diarios<i class="icon-arrow-right"></i></a>
                        </li>
                    </ul>
                </li>
                <li><a href="showPOICityUser.php"><span class="glyphicon glyphicon-map-marker"></span> Lugares visitados</a></li>
                <?php
                if ($objUsuarioConectado->getProfessional() == 1) {
                    ?>
                    <li><a href="addAnuncio.php"><span class="glyphicon glyphicon-info-sign"></span> Anuncios</a></li>
                    <?php
                }
                ?>
                <li><a href="showMisPois.php"><span class="glyphicon glyphicon-globe"></span> Mis POI's</a></li>
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