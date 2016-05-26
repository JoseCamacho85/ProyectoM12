<?php
include ("header.php");
if (checkSession()) {
    include '../controller/controllerVerDetalleUsuario.php';
    include("../controller/validatorTipoUsuario.php");
    include 'modules/moduleUserNav.php';
    ?>

    <h2>Datos personales</h2>
    <div class="container-fluid text-center">   
        <?php
        include ("./modules/addFotoUser.php");
        ?>
    <!--p><span>Foto: </span><input type="text" name="fotoUser" id="fotoUser" value="<?php //echo $fotoSubida;      ?>"></p-->
        <center><form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post" enctype="multipart/form-data" name="inscripcion">
            <input type="file" name="archivo[]" multiple="multiple">
            <input type="submit" value="Subir imagen"  class="trig">
        </form></center>
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
    </div>
    <?php
} else {
    header("Location: formErrorSession.php");
}
include ("footer.php");
?>
