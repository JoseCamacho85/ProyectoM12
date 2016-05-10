<?php
include ("header.php");
?>
<form action="../controller/controllerAddUser.php" method="post">
    <p>Nombre del diario: <input type="text" name="nombre" maxlength="25" required /></p>
    <p>Descripcion: <input type="password" name="descripcion" maxlength="25" required /></p>
    <p>ID_Usuario: <input type="email" name="id_usuario" maxlength="50" required /></p>
    <input type="submit" value="enviar" name="submit"/>
</form>
<?php
include ("footer.php");
?>