<?php
include ("header.php");
?>
<form action="../controller/controllerAddUser.php" method="post">
    <p>Nombre del diario: <input type="text" name="username" maxlength="25" required /></p>
    <p>Descripcion: <input type="password" name="password" maxlength="25" required /></p>
    <p>E-mail: <input type="email" name="email" maxlength="50" required /></p>
    <p>Población: <input type="text" name="poblacion" maxlength="50" /></p>
    <p>Idioma: <input type="text" name="idioma" maxlength="25" /></p>
    <p>Teléfono: <input type="text" name="telefono" maxlength="11" /></p>
    <p>URL: <input type="text" name="url" maxlength="50" /></p>
    <p>Foto: <input type="text" name="foto" /></p> <!-- Ver si hay algún plugin para examinar imagen -->
    <p>Texto de presentación:</p>
    <textarea name="textoPresentacion" rows="4" cols="30"></textarea><br/>
    <input type="submit" value="Registrarse" name="submit"/>
</form>
<?php
include ("footer.php");
?>