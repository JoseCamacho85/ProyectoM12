<?php
include ("header.php");
?>
<form action="../controller/controllerAddRuta.php" method="post">
    <p>Nombre de la ruta: <input type="text" name="nameRuta" maxlength="25" required /></p>
    <textarea name="nameDescripcion" rows="4" cols="30"></textarea><br/>
    <p>id de la usuari: <input type="text" name="idUsuari" maxlength="25" required /></p>
    <input type="submit" value="Registrarse" name="submit"/>
</form>
<?php
include ("footer.php");
?>