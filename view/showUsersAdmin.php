<?php
include ("header.php");

if (checkSession()) {
    include_once("../model/DAO/classDB.php");
    require_once('Structures/DataGrid.php');

    function Editar($params) {
        extract($params);
        $id = $record['id'];
    }

    if (isset($_SESSION['pantalla'])) {
        if ($_SESSION['pantalla'] == 'POI') {
            if (isset($_POST['buscar']))
                $_SESSION['buscar'] = $_POST['buscar'];
            if (isset($_POST['categoria']))
                $_SESSION['categoria'] = $_POST['categoria'];
        }
    }else {
        $_SESSION['pantalla'] = 'POI';
        $_SESSION['buscar'] = '';
        $_SESSION['categoria'] = '';
    }

    function Imprimir($params) {
        extract($params);
        $id = $record['id'];
        $tmp = time();
        return "<a target=\"_blank\" href=\"employee_pdf.php?id=$id&tmp=$tmp\"><img border=\"0\" src=\"images/imprimir.gif\" alt=\"$label\" title=\"$label\" /></a>";
    }

    function Llistar($params) {
        extract($params);
        $id = $record['id'];
        return "<a href=\"worker_list.php?id=$id\"><img border=\"0\" src=\"images/boton-detalles.png\" alt=\"$label\" title=\"$label\" /></a>";
    }

    function Borrar($params) {
        extract($params);
        $id = $record['id'];
        return "<a href=\"../controller/controllerDeleteDiaryUser.php?id=$id\"><img border=\"0\" alt=\"$label\" title=\"$label\" /></a>";
    }

    function VerDetalles($params) {
        extract($params);
        $id = $record['id'];
        return "<a href=\"showDataUser.php?id=$id\"><img border=\"0\" alt=\"$label\" title=\"$label\"  src=\"images/boton-detalles.png\"/></a>";
    }
    ?>

    <style type="text/css">
    <?php include("css/gridview.css"); ?>
    </style>

    <?php
    include '../controller/controllerVerDetalleUsuario.php';
    include("../controller/validatorTipoUsuario.php");
    include 'modules/moduleUserNav.php';
    ?>
    <tr class="col-md-10 col-md-offset-1">
        <td> <a href="administracion.php" id="volver"><button class="btn btn-info">Volver</button></a></td>
    </tr>
    <h2>usuarios</h2>
    <div class="col-md-8 col-md-offset-2">   
        <br />  
        <table align="center">
            <tr>
                <td valign="middle" align="center" colspan="2">
                    <form name="formbuscar" action="showUsersAdmin.php" method="post">
                        <input name ="buscar" type="text" size="40" value="<?php echo ($_SESSION['buscar']) ?>">
                        <select name="categoria">
                            <option value="id" <?php if ($_SESSION['categoria'] == "id") echo 'selected="selected"' ?>>ID</option>
                            <option value="username" <?php if ($_SESSION['categoria'] == "username") echo 'selected="selected"' ?>>Username</option>
                            <option value="email" <?php if ($_SESSION['categoria'] == "email") echo 'selected="selected"' ?>>Email</option>
                            <option value="poblacion" <?php if ($_SESSION['categoria'] == "poblacion") echo 'selected="selected"' ?>>Población</option>
                            <option value="idioma" <?php if ($_SESSION['categoria'] == "idioma") echo 'selected="selected"' ?>>Idioma</option>
                            <option value="telefono" <?php if ($_SESSION['categoria'] == "telefono") echo 'selected="selected"' ?>>Teléfono</option>
                            <option value="esAdministrador" <?php if ($_SESSION['categoria'] == "esAdministrador") echo 'selected="selected"' ?>>Administrador</option>
                            <option value="esUsuarioRegistrado" <?php if ($_SESSION['categoria'] == "esUsuarioRegistrado") echo 'selected="selected"' ?>>Usuario registrado</option>
                            <option value="esUsuarioProfesional" <?php if ($_SESSION['categoria'] == "esUsuarioProfesional") echo 'selected="selected"' ?>>Usuario profesional</option>
                        </select>           
                        <input name ="enviar" type="submit" value="Search">
                    </form>

                </td>
            </tr>
    </div>

    <tr>
        <td id="contentGrid" colspan="2" align="center">

            <?php
            $mostrar = 15;

            $dg = & new Structures_DataGrid($mostrar);
            $dg->renderer->setTableAttribute('cellspacing', '1');
            $dg->renderer->setTableAttribute('cellpadding', '4');
            $dg->renderer->setTableAttribute('class', 'datagrid');

            $dg->renderer->sortIconASC = "&uarr;";
            $dg->renderer->sortIconDESC = "&darr;";

            $column = new Structures_DataGrid_Column('Id', 'id', 'id', array('align' => 'center'));
            $dg->addColumn($column);
            $column = new Structures_DataGrid_Column('Username', 'username', 'username', array('align' => 'center'));
            $dg->addColumn($column);
            $column = new Structures_DataGrid_Column('Email', 'email', 'email', array('align' => 'center'));
            $dg->addColumn($column);
            $column = new Structures_DataGrid_Column('Administrador', 'esAdministrador', 'esAdministrador', array('align' => 'center'));
            $dg->addColumn($column);
            $column = new Structures_DataGrid_Column('Profesional', 'esUsuarioProfesional', 'esUsuarioProfesional', array('align' => 'center'));
            $dg->addColumn($column);
            $column = new Structures_DataGrid_Column('Detalles', null, null, array('align' => 'center'), null, 'VerDetalles($label=Ver detalles)');
            $dg->addColumn($column);

            if (isset($_GET["orderBy"])) {
                $order = $_GET["orderBy"];
            } else {
                $order = "username";
            }

            if (isset($_GET["direction"])) {
                $direccio = $_GET["direction"];
            } else {
                $direccio = "";
            }

            if (isset($_GET["page"])) {
                $page = (int) $_GET["page"];
            } else {
                $page = 0;
            }

            if (($_SESSION['buscar']) != '') {
                $categoria = $_SESSION["categoria"];
                $buscar = "AND " . $categoria . " LIKE  '%" . $_SESSION["buscar"] . "%'";
            } else {
                $buscar = "";
            }

            $totalobres = "SELECT * FROM usuario WHERE 1=1";
            if (strlen($buscar))
                $totalobres .= " " . $buscar;
            if (strlen($order))
                $totalobres .= " ORDER BY " . $order;
            if (strlen($direccio))
                $totalobres .= " " . $direccio;

            $con = new DB();
            $stm = $con->query($totalobres);
            $rtotalobres = $stm->fetchAll(PDO::FETCH_ASSOC);

            if (count($rtotalobres) > 0) {
                $dg->bind($rtotalobres);
                $dg->render();
                if (strlen($buscar)) {
                    $dg->renderer->setExtraVars(array("buscar" => $_SESSION["buscar"], "categoria" => $categoria));
                }
            } else {
                if (strlen($buscar)) {
                    echo "<p style=\"color:red; padding-left:1em;\">Failed search, there aren't any result.<p>";
                } else {
                    echo "<p style=\"color:red; padding-left:1em;\">No registers in DB.<p>";
                }
            }
            ?> 
        </td>
    </tr>
    </table>
    </div>
    <?php
} else {
    header("Location: formErrorSession.php");
}
include ("footer.php");
?>