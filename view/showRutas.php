<?php
include ("header.php");

include_once("../model/DAO/classDB.php");
require_once('Structures/DataGrid.php');

function Editar($params) {
    extract($params);
    $id = $record['id'];
}

if (isset($_SESSION['pantalla'])) {
    if ($_SESSION['pantalla'] == 'ruta') {
        if (isset($_POST['buscar']))
            $_SESSION['buscar'] = $_POST['buscar'];
        if (isset($_POST['categoria']))
            $_SESSION['categoria'] = $_POST['categoria'];
    }
}else {
    $_SESSION['pantalla'] = 'ruta';
    $_SESSION['buscar'] = '';
    $_SESSION['categoria'] = '';
}

function Borrar($params) {
    extract($params);
    $id = $record['id'];
    return "<a href=\"../controller/controllerDeleteRutas.php?id=$id\"><span class=\"glyphicon glyphicon-trash\"></span></a>";
}

function VerDetalles($params) {
    extract($params);
    $id = $record['id'];
    return "<a href=\"showDetalleRuta.php?id=$id\"><span class=\"glyphicon glyphicon-zoom-in\"></span></a>";
}
?>
<?php
if (!isset($_SESSION['bitacle'])) {

    $bitacle = new Bitacle("bitacle");
    $_SESSION['bitacle'] = serialize($bitacle);
} else {
    $bitacle = unserialize($_SESSION['bitacle']);
}
?>

<style type="text/css">
<?php include("css/gridview.css"); ?>
</style>

<tr class="col-md-10 col-md-offset-1">
    <td> <?php
        if (isset($_SESSION['user'])) {
            $user = "";
            include '../controller/controllerVerDetalleUsuario.php';
            include("../controller/validatorTipoUsuario.php");
            include 'modules/moduleUserNav.php';
//            include("modules/addRutaBoton.php");
        }
        ?></td>
    <!--<td> <a href="main.php" id="volver"><button class="btn btn-info">Volver</button></a></td>-->
</tr>

<h2>rutas</h2>

<table align="center">
    <tr>
        <td valign="middle" align="center" colspan="2">
            <form name="formbuscar" action="showRutas.php" method="post">
                <input name ="buscar" type="text" size="40" value="<?php echo ($_SESSION['buscar']) ?>">
                <select name="categoria">
                    <option value="id" <?php if ($_SESSION['categoria'] == "id") echo 'selected="selected"' ?>>ID</option>
                    <option value="nombre" <?php if ($_SESSION['categoria'] == "nombre") echo 'selected="selected"' ?>>Nombre</option>
                    <option value="descripcion" <?php if ($_SESSION['categoria'] == "descripcion") echo 'selected="selected"' ?>>Descripcion</option>
                </select>			
                <input name ="enviar" type="submit" value="Search">
            </form>
        </td>
    </tr>
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

            $column = new Structures_DataGrid_Column('NOMBRE', 'nombre', 'nombre', array('align' => 'center'));
            $dg->addColumn($column);
            $column = new Structures_DataGrid_Column('DESCRIPCIÓN', 'descripcion', 'descripcion', array('align' => 'center'));
            $dg->addColumn($column);

            $column = new Structures_DataGrid_Column('DETALLES', null, null, array('align' => 'center'), null, 'VerDetalles($label=Ver detalles)');
            $dg->addColumn($column);

            if (isset($_SESSION['user'])) {
                if ($objUsuarioConectado->getAdministrador() == 1) {
                   $column = new Structures_DataGrid_Column('ELIMINAR', null, null, array('align' => 'center'), null, 'Borrar($label=Delete)');
                    $dg->addColumn($column);
                }

            }

            if (isset($_GET["orderBy"])) {
                $order = $_GET["orderBy"];
            } else {
                $order = "nombre";
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

            $totalobres = "SELECT * FROM ruta WHERE 1=1 ";
            if (strlen($buscar))
                $totalobres .= " " . $buscar;
            if (strlen($order))
                $totalobres .= " ORDER BY " . $order;
            if (strlen($direccio))
                $totalobres .= " " . $direccio;

            $mysqli = new DB();
            $stm = $mysqli->query($totalobres);
            $rtotalobres = $stm->fetchAll(PDO::FETCH_ASSOC);

            if (count($rtotalobres) > 0) {
                $dg->bind($rtotalobres);
                $dg->render();
                if (strlen($buscar)) {
                    $dg->renderer->setExtraVars(array("buscar" => $_SESSION["buscar"], "categoria" => $categoria));
                }
            } else {
                if (strlen($buscar)) {
                    echo "<p style=\"color:red; padding-left:1em;\">Error de búsqueda: no hay coincidencias.<p>";
                } else {
                    echo "<p style=\"color:red; padding-left:1em;\">No hay registros.<p>";
                }
            }
            ?> 
        </td>
    </tr>


</table>

<?php
include ("footer.php");
?>