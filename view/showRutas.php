<?php
include ("header.php");

include_once("../model/DAO/classDB.php");
require_once('Structures/DataGrid.php');

function Editar($params) {
    extract($params);
    $id = $record['id'];
    //return "<a href=\"worker_modify.php?id=$id\"><img border=\"0\" src=\"images/edit.gif\" alt=\"$label\" title=\"$label\" /></a>";	
}

//final de la funcio Editar

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

function Imprimir($params) {
    extract($params);
    $id = $record['id'];
    $tmp = time();
    return "<a target=\"_blank\" href=\"employee_pdf.php?id=$id&tmp=$tmp\"><img border=\"0\" src=\"images/imprimir.gif\" alt=\"$label\" title=\"$label\" /></a>";
}

//final de la funcio Editar

function Llistar($params) {
    extract($params);
    $id = $record['id'];
    return "<a href=\"worker_list.php?id=$id\"><img border=\"0\" src=\"images/boton-detalles.png\" alt=\"$label\" title=\"$label\" /></a>";
}

//final de la funcio Editar	

function Borrar($params) {
    extract($params);
    $id = $record['id'];
    return "<a href=\"../controller/controllerDeleteEmployee.php?id=$id\"><img border=\"0\" src=\"images/delete.gif\" alt=\"$label\" title=\"$label\" /></a>";
}

function VerDetalles($params) {
    extract($params);
    $id = $record['id'];
    return "<a href=\"showDetalleRuta.php?id=$id\"><img border=\"0\" src=\"images/boton-detalles.png\" alt=\"$label\" title=\"$label\" /></a>";
}
?>
<?php
if (!isset($_SESSION['bitacle'])) {

    $bitacle = new Bitacle("bitacle");
    $_SESSION['bitacle'] = serialize($bitacle);
} else {
    // if session exist, we unserializate it.
    $bitacle = unserialize($_SESSION['bitacle']);
}
?>

<!--Css para gridviews-->
<style type="text/css">
<?php include("css/gridview.css"); ?>
</style>

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
// Define DataGrid Color Attributes
// Define DataGrid Table Attributes
//$dg->renderer->setTableAttribute('width', '25%');
            $dg->renderer->setTableAttribute('cellspacing', '1');
            $dg->renderer->setTableAttribute('cellpadding', '4');
            $dg->renderer->setTableAttribute('class', 'datagrid');

//$dg->renderer->sortIconASC = "&uArr;";
//$dg->renderer->sortIconDESC = "&dArr;";
            $dg->renderer->sortIconASC = "&uarr;";
            $dg->renderer->sortIconDESC = "&darr;";

// Set empty row table attributes
// Definim les columnes del datagrid
            $column = new Structures_DataGrid_Column('Id', 'id', 'id', array('align' => 'center'));
            $dg->addColumn($column);
            $column = new Structures_DataGrid_Column('Nombre', 'nombre', 'nombre', array('align' => 'center'));
            $dg->addColumn($column);
            $column = new Structures_DataGrid_Column('Descripcion', 'descripcion', 'descripcion', array('align' => 'center'));
            $dg->addColumn($column);

            /*
              $column = new Structures_DataGrid_Column('Nom', 'petnom', 'petnom', array('width' => '255','align'=>'center'));
              $dg->addColumn($column);
              $column = new Structures_DataGrid_Column('Adre�a', ' petadr', ' petadr', array('width' => '255'));
              $dg->addColumn($column);
             */
            $column = new Structures_DataGrid_Column('Detalles', null, null, array('align' => 'center'), null, 'VerDetalles($label=Ver detalles)');
            $dg->addColumn($column);
//$column = new Structures_DataGrid_Column('      ', null, null, array('align' => 'center'), null, 'Editar($label=Modify)');
//$dg->addColumn($column);
//$column = new Structures_DataGrid_Column('      ', null, null, array('align' => 'center'), null, 'Imprimir($label=Print PDF)');
//$dg->addColumn($column);
//$column = new Structures_DataGrid_Column('      ', null, null, array('align' => 'center'), null, 'Llistar($label=Llistats de peticionari)');
//$dg->addColumn($column);
            $column = new Structures_DataGrid_Column('Eliminar', null, null, array('align' => 'center'), null, 'Borrar($label=Delete)');
            $dg->addColumn($column);


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
                // Print the DataGrid
                $dg->render();
                if (strlen($buscar)) {
                    $dg->renderer->setExtraVars(array("buscar" => $_SESSION["buscar"], "categoria" => $categoria));
                }
                //echo $dg->renderer->getPaging(); OLGA: error al paginar
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
    
    <tr class="col-md-10 col-md-offset-1">
        <td> <?php
            if (isset($_SESSION['user'])) {
                $user = "";
                include("modules/addRutaBoton.php");
                //$bitacle = new Bitacle("bitacle");
                //$_SESSION['bitacle'] = serialize($bitacle);
            }
            ?></td>
        <td> <a href="main.php" id="volver"><button class="btn btn-info">volver</button></a></td>

    </tr>
</table>

<?php
include ("footer.php");
?>