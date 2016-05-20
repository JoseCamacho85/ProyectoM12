<?php
include ("header.php");
if (checkSession()) {
    ?>
    <h2>DATOS DE USUARIO</h2>
    <div id="mostrarInfo">

    </div>
    <input type="button" value="VOLVER" onclick="location.href = 'main.php'">

    <?php
} else {
    header("Location: formErrorSession.php");
}
include ("footer.php");
?>