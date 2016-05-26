<?php
include ("header.php");
include ("makeDropdownLists.php");
include("../controller/controllerIdDropdowns.php");
include("../controller/validatorTipoUsuario.php");

include ('modules/moduleUserNav.php');
if ((checkSession()) && ($objUsuarioConectado->getAdministrador() == 1)) {
    ?>

    <script type="text/javascript"><?php include ("js/mostrarUsuarios.js"); ?></script>
    <div class="container-fluid text-center">    
        <div class="row content">
            <div class="col-sm-12 text-center"> 
                <h2>panel de administrador</h2>
                <hr>
                <div id="adminUsers">
                    <h3>Administración de usuarios</h3>
                    <form method="POST" action="../controller/controllerAdministracion.php" name="formAdminUser" id="formAdminUser">            
                        <p>User: <select name="selectedUser" id="selectedUser" onchange="mostrarUsuarios(this.value)">
                                <?php makeDropdownlistUsers(); ?>
                            </select></p>
                        <p>Username:<input type="text" id="usernameUser" name="usernameUser"/></p>
                        <p>Password:<input type="text" id="passwordUser" name="passwordUser"/></p>
                        <p>E-mail:<input type="text" id="emailUser" name="emailUser" /></p>
                        <p>Población:<input type="text" id="poblacionUser" name="poblacionUser"></p>
                        <p>Idioma:<input type="text" id="idiomaUser" name="idiomaUser"/></p>
                        <p>Teléfono:<input type="text" id="telefonoUser" name="telefonoUser"/></p>
                        <p>URL:<input type="text" id="urlUser" name="urlUser"/></p>
                        <p>Foto:<input type="text" id="fotoUser" name="fotoUser"/></p>
                        <p>Texto Presentación:<input type="text" id="textoPresentacionUser" name="textoPresentacionUser"/></p>

                        <input type="submit" id="modificarUser" name= "modificarUser" value="Modificar Usuario">
                        <div id="botones">
                            <input type="submit" id="eliminarUser" name="eliminarUser" value="Eliminar Usuario">
                        </div>
                    </form>
                    <div id="seleccionados">
                        <div id="ok"></div>
                    </div>
                </div>

                <div>
                    <h3>Creación de Tipos</h3>
                    <form action="../controller/controllerCrearTipo.php" name="crearTipo">
                        <input name="tipo" type="text">
                        <input type="submit" value="Crear Tipo" />
                    </form>
                </div>

                <div>
                    <h3>Creación de Transportes</h3>
                    <form action="../controller/controllerCrearTransporte.php" name="crearTransporte">
                        <input name="transporte" type="text">
                        <input type="submit" value="Crear Transporte" />
                    </form>
                </div>

                <div>
                    <h3>Creación de Entornos</h3>
                    <form action="../controller/controllerCrearEntorno.php" name="crearEntorno">
                        <input name="entorno" type="text">
                        <input type="submit" value="Crear Entorno" />
                    </form>
                </div>

            </div>

        </div>
    </div>
    </div>
    <?php
} else {
    header("Location: formErrorSession.php");
}
include ("footer.php");
?>