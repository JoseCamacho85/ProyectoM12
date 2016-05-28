<?php
include ("header.php");
include ("makeDropdownLists.php");
include("../controller/controllerIdDropdowns.php");
include("../controller/validatorTipoUsuario.php");

include ('modules/moduleUserNav.php');
if ((checkSession()) && ($objUsuarioConectado->getAdministrador() == 1)) {
    ?>

    <script type="text/javascript"><?php include ("js/mostrarUsuarios.js"); ?></script>
    <div class="container">    
        <div class="row content">
            <div class="col-md-12"> 
                <h2>panel de administrador</h2>
                <hr>
                <div class="cuadro">
                    <div id="adminUsers">
                        <h3>administración de usuarios</h3>
                        <form method="POST" action="../controller/controllerAdministracion.php" name="formAdminUser" id="formAdminUser">            
                            <p><span class="titulos">User: </span><select name="selectedUser" id="selectedUser" onchange="mostrarUsuarios(this.value)">
                                    <?php makeDropdownlistUsers(); ?>
                                </select></p>
                            <p><span class="titulos">Username: </span><input type="text" id="usernameUser" name="usernameUser"/></p>
                            <p><span class="titulos">Password: </span><input type="text" id="passwordUser" name="passwordUser"/></p>
                            <p><span class="titulos">E-mail: </span><input type="text" id="emailUser" name="emailUser" /></p>
                            <p><span class="titulos">Población: </span><input type="text" id="poblacionUser" name="poblacionUser"></p>
                            <p><span class="titulos">Idioma: </span><input type="text" id="idiomaUser" name="idiomaUser"/></p>
                            <p><span class="titulos">Teléfono: </span><input type="text" id="telefonoUser" name="telefonoUser"/></p>
                            <p><span class="titulos">URL: </span><input type="text" id="urlUser" name="urlUser"/></p>
                            <p><span class="titulos">Foto: </span><input type="text" id="fotoUser" name="fotoUser"/></p>
                            <p><span class="titulos">Presentación: </span></p><textarea rows="4" cols="50" id="textoPresentacionUser" name="textoPresentacionUser"></textarea>
                            <p></p>
                            <div class="centrar"><p><input type="submit" id="modificarUser" name= "modificarUser" value="Modificar Usuario" class="btn btn-info"></p>
                                <div id="botones">
                                    <input type="submit" id="eliminarUser" name="eliminarUser" value="Eliminar Usuario" class="btn btn-info">
                                </div>
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
                            <input type="submit" value="Crear Tipo" class="btn btn-info"/>
                        </form>
                    </div>

                    <div>
                        <h3>Creación de Transportes</h3>
                        <form action="../controller/controllerCrearTransporte.php" name="crearTransporte">
                            <input name="transporte" type="text">
                            <input type="submit" value="Crear Transporte" class="btn btn-info"/>
                        </form>
                    </div>

                    <div>
                        <h3>Creación de Entornos</h3>
                        <form action="../controller/controllerCrearEntorno.php" name="crearEntorno">
                            <input name="entorno" type="text">
                            <input type="submit" value="Crear Entorno" class="btn btn-info"/>
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