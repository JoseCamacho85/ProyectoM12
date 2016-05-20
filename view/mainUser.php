<?php
include ("header.php");
if (checkSession()) {
    include '../controller/controllerVerDetalleUsuario.php';
    ?>
    <h2>DATOS PERSONALES</h2>
    <form method="post" action="../controller/controllerModificarDatosUsuario.php">
        <img class="fotoMostrar" src="fotoUsuario/<?php $foto ?>"/>
        <p>Username: <input name="username" type="text" value="<?php echo $username ?>" /></p>
        <p>E-mail: <input name="email" type="text" value="<?php echo $email ?>" </p>
        <p>Población: <input name="poblacion" type="text" value="<?php echo $poblacion ?>" </p>
        <p>Idioma: <input name="idioma" type="text" value="<?php echo $idioma ?>" </p>
        <p>Teléfono: <input name="telefono" type="text" value="<?php echo $telefono ?>" </p>
        <p>URL: <input name="url" type="text" value="<?php echo $url ?>" </p>
        <p>Texto de presentación: <input name="textoPresentacion" type="text" value="<?php echo $texto ?>" </p>
        <p><input type="submit" value="Modificar datos" /></p>
    </form>
    <a href="showDiaryUser.php"><button class="btn btn-info">Diarios</button></a>
    <a href="showPOICityUser.php"><button class="btn btn-info">Lugares visitados</button></a>
    <a href="main.php" id="volver"><button class="btn btn-info">VOLVER</button></a>
    <?php
} else {
    header("Location: formErrorSession.php");
}
include ("footer.php");
?>