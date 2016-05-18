<?php
include ("header.php");
include '../controller/controllerVerDetalleUsuario.php';
?>
<h2>DATOS PERSONALES</h2>
<form method="post" action="../controller/controllerModificarDatosUsuario.php"> <!-- HAY QUE CREAR EL CONTROLLER -->
    <img src="<?php $foto ?>" />
    <p>Username: <input type="text" value="<?php echo $username ?>" /></p>
    <p>E-mail: <input type="text" value="<?php echo $email ?>" </p>
    <p>Población: <input type="text" value="<?php echo $poblacion ?>" </p>
    <p>Idioma: <input type="text" value="<?php echo $idioma ?>" </p>
    <p>Teléfono: <input type="text" value="<?php echo $telefono ?>" </p>
    <p>URL: <input type="text" value="<?php echo $url ?>" </p>
    <p>Texto de presentación: <input type="text" value="<?php echo $texto ?>" </p>
    <p><input type="submit" value="Modificar datos" /></p>
</form>
<a href="showDiaryUser.php"><button class="btn btn-info">Diarios</button></a>
<a href="showPOICityUser.php"><button class="btn btn-info">Lugares visitados</button></a>
<?php include ("footer.php"); ?>