<?php
include ("header.php");
if (checkSession()) {
    include("../controller/controllerIdDropdowns.php");
    include '../controller/controllerVerDetalleUsuarioAdmin.php';
    include("../controller/validatorTipoUsuario.php");
    include 'modules/moduleUserNav.php';
    ?>
    <h2><?php echo $username ?></h2>
    <div class="container-fluid text-center">   
        <img class="fotoMostrar" src="fotoUsuario/<?php echo $foto ?>"/>
        <p>Username: <?php echo $username ?></p>
        <p>E-mail: <?php echo $email ?></p>
        <p>Población: <?php echo $poblacion ?></p>
        <p>Idioma: <?php echo $idioma ?></p>
        <p>Teléfono: <?php echo $telefono ?></p>
        <p>URL: <?php echo $url ?></p>
        <p>Texto de presentación: <?php echo $texto ?></p>       
        <a href="showUsersAdmin.php" id="volver"><button class="btn btn-info">Volver</button></a>
    </div>
    <?php
} else {
    header("Location: formErrorSession.php");
}
include ("footer.php");
?>