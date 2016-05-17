<?php
include ("header.php");
include ("../view/modules/addFotoUser.php")
?>

<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post" enctype="multipart/form-data" name="inscripcion">
    <input type="file" name="archivo[]" multiple="multiple">
   <input type="submit" value="Subir imagen"  class="trig">
</form>

<form action="../controller/controllerAddUser.php" method="post" enctype="multipart/form-data" name="inscripcion">
 
    <p>Nombre de usuario: <input type="text" name="username" maxlength="25" /></p>
    <p>Contraseña: <input type="password" name="password" maxlength="25" /></p>
    <p>E-mail: <input type="email" name="email" maxlength="50" /></p>
    <p>Población: <input type="text" name="poblacion" maxlength="50" /></p>
    <p>Idioma: <input type="text" name="idioma" maxlength="25" /></p>
    <p>Teléfono: <input type="text" name="telefono" maxlength="11" /></p>
    <p>URL: <input type="text" name="url" maxlength="50" /></p>
<p>Foto: <input type="text" id="fotoUser" name = "fotoUser" value="<?php echo $fotoSubida; ?>"/></p>

    <p>Texto de presentación:</p>
    <textarea name="textoPresentacion" rows="4" cols="30"></textarea><br/>
    
    
    <p>¿Eres usuario profesional?: <input type="checkbox" name="profesional" value="patata" /></p>
    
    
    <input type="submit" value="Registrarse" name="submit"/>
</form>

<?php
include ("footer.php");
?>