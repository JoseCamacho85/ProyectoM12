<?php
include ("header.php");
include '../controller/controllerVerDetalleUsuario.php';
?>
<h2>DATOS PERSONALES</h2>
<form method="post" action="../controller/controllerModificarDatosUsuario.php">
    <img id="foto" class="fotoMostrar" src="fotoUsuario/<?php $foto ?>"/>
    <p>Username: <input id="username" type="text" value="<?php echo $username ?>" /></p>
    <p>E-mail: <input id="email" type="text" value="<?php echo $email ?>" </p>
    <p>Población: <input id="poblacion" type="text" value="<?php echo $poblacion ?>" </p>
    <p>Idioma: <input id="idioma" type="text" value="<?php echo $idioma ?>" </p>
    <p>Teléfono: <input id="telefono" type="text" value="<?php echo $telefono ?>" </p>
    <p>URL: <input id="url" type="text" value="<?php echo $url ?>" </p>
    <p>Texto de presentación: <input id="textoPresentacion" type="text" value="<?php echo $texto ?>" </p>
    <p><input type="submit" value="Modificar datos" /></p>
</form>
<a href="showDiaryUser.php"><button class="btn btn-info">Diarios</button></a>
<a href="showPOICityUser.php"><button class="btn btn-info">Lugares visitados</button></a>
<a href="main.php" id="volver"><button class="btn btn-info">VOLVER</button></a>
<?php include ("footer.php"); ?>