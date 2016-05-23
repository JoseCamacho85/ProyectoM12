<?php
include ("header.php");
if (checkSession()){
include '../controller/controllerVerDetalleUsuario.php';
?>
<h2>DATOS PERSONALES</h2>
<form method="post" action="../controller/controllerModificarDatosUsuario.php"> <!-- HAY QUE CREAR EL CONTROLLER -->
    <img class="fotoMostrar" src="fotoUsuario/<?php $foto ?>"/>
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
<a href="addAnuncio.php"><button class="btn btn-info">Anuncios</button></a>
<a href="showMisPois.php"><button class="btn btn-info">Mis POIs</button></a>
<a href="administracion.php"><button class="btn btn-info">Administración</button></a>
<a href="main.php" id="volver"><button class="btn btn-info">VOLVER</button></a>
<?php
}else{
	header("Location: formErrorSession.php");
}
include ("footer.php"); 

?>