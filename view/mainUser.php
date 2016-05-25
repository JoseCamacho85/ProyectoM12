<?php
include ("header.php");
if (checkSession()) {
    include '../controller/controllerVerDetalleUsuario.php';
    include("../controller/validatorTipoUsuario.php");
    include 'modules/moduleUserNav.php';
    ?>
    <!--ul class="nav nav-pills">
        <li><a href="#">DATOS PERSONALES</a></li>
        <li><a href="showDiaryUser.php">Diarios</a></li>
        <li><a href="showPOICityUser.php">Lugares visitados</a></li>
        <li><a href="showMisPois.php">Mis POIs</a></li>
        <li><a href="showPOICityUser.php">Mensajes Privados</a></li>
    </ul-->
    <h2>DATOS PERSONALES</h2>
    <?php
    include ("./modules/addFotoUser.php");
    ?>
    <!--p><span>Foto: </span><input type="text" name="fotoUser" id="fotoUser" value="<?php //echo $fotoSubida;  ?>"></p-->
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post" enctype="multipart/form-data" name="inscripcion">
        <input type="file" name="archivo[]" multiple="multiple">
        <input type="submit" value="Subir imagen"  class="trig">
    </form>
    <form method="post" action="../controller/controllerModificarDatosUsuario.php">
        <img class="fotoMostrar" src="fotoUsuario/<?php echo $foto ?>"/>
        <p>Foto: <input id="fotoUser" type="text" id="fotoUser" name = "fotoUser" value="<?php echo $fotoSubida; ?>"/></p>
        <p>Username: <input type="text" name="username" value="<?php echo $username ?>" /></p>
        <p>E-mail: <input type="text" name="email" value="<?php echo $email ?>" </p>
        <p>Población: <input type="text" name="poblacion" value="<?php echo $poblacion ?>" </p>
        <p>Idioma: <input type="text" name="idioma" value="<?php echo $idioma ?>" </p>
        <p>Teléfono: <input type="text" name="telefono" value="<?php echo $telefono ?>" </p>
        <p>URL: <input type="text" name="url" value="<?php echo $url ?>" </p>
        <p>Texto de presentación: <input type="text" name="textoPresentacion" value="<?php echo $texto ?>" </p>
        <p><input type="submit" value="Modificar datos" /></p>
    </form>
    <a href="showDiaryUser.php"><button class="btn btn-info">Diarios</button></a>
    <a href="showPOICityUser.php"><button class="btn btn-info">Lugares visitados</button></a>
    <?php
//    include("../controller/validatorTipoUsuario.php");
    if ($objUsuarioConectado->getProfessional() == 1) {
        include("modules/botonAddAnuncio.php");
    }
    ?>   
    <a href="showMisPois.php"><button class="btn btn-info">Mis POIs</button></a>
    <?php
    if ($objUsuarioConectado->getAdministrador() == 1) {
        include("modules/botonAddAdministrador.php");
    }
    ?> 
    <a href="message.php" id="volver"><button class="btn btn-info">Mensajes Privados</button></a>  
    <a href="main.php" id="volver"><button class="btn btn-info">VOLVER</button></a>
    <?php
} else {
    header("Location: formErrorSession.php");
}
include ("footer.php");
?>