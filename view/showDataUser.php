<?php
include ("header.php");
if (checkSession()) {
    include("../controller/controllerIdDropdowns.php");
    include '../controller/controllerVerDetalleUsuarioAdmin.php';
    include("../controller/validatorTipoUsuario.php");
    include 'modules/moduleUserNav.php';
    ?>
    <a href="showUsersAdmin.php" id="volver"><button class="btn btn-info">Volver</button></a>
    <h2><?php echo $username ?></h2>
    <hr>
    <div class="row content">
            <div class="col-md-6 col-md-offset-3 text-center"> 
                <div class="cuadro">   
        <img class="fotoMostrar" src="fotoUsuario/<?php echo $foto ?>"/>
        <p><span class="titulos">Username: </span><?php echo $username ?></p>
        <p><span class="titulos">E-mail: </span><?php echo $email ?></p>
        <p><span class="titulos">Población: </span><?php echo $poblacion ?></p>
        <p><span class="titulos">Idioma: </span><?php echo $idioma ?></p>
        <p><span class="titulos">Teléfono: </span><?php echo $telefono ?></p>
        <p><span class="titulos">URL: </span><?php echo $url ?></p>
        <p><span class="titulos">Texto de presentación: </span><?php echo $texto ?></p> 
    </div><br></div></div>
    <?php
} else {
    header("Location: formErrorSession.php");
}
include ("footer.php");
?>