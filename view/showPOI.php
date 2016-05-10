<?php
include ("header.php");

include_once("../model/DAO/classDB.php");
require_once('Structures/DataGrid.php');

//session_start() ;

// Incloem els fitxers necessaris: ADODB, seguretat, configuració i funcions
//include_once("adodb/adodb.inc.php");

//require_once("../../../../../php/pear/Structures/DataGrid.php")


function Editar($params){
 extract($params);
 $id = $record['id'];
 //return "<a href=\"worker_modify.php?id=$id\"><img border=\"0\" src=\"images/edit.gif\" alt=\"$label\" title=\"$label\" /></a>";	
}//final de la funcio Editar

if (isset($_SESSION['pantalla'])){
if ($_SESSION['pantalla']=='POI') {
if (isset($_POST['buscar'])) $_SESSION['buscar']=$_POST['buscar'];
if (isset($_POST['categoria'])) $_SESSION['categoria']=$_POST['categoria'];
}

}else {
$_SESSION['pantalla']='POI';
$_SESSION['buscar']='';
$_SESSION['categoria']='';
}


function Imprimir($params){
 extract($params);
 $id = $record['id'];
 $tmp = time();
 return "<a target=\"_blank\" href=\"employee_pdf.php?id=$id&tmp=$tmp\"><img border=\"0\" src=\"images/imprimir.gif\" alt=\"$label\" title=\"$label\" /></a>";	
}//final de la funcio Editar

function Llistar($params){
 extract($params);
 $id = $record['id'];
 return "<a href=\"worker_list.php?id=$id\"><img border=\"0\" src=\"images/llistar.gif\" alt=\"$label\" title=\"$label\" /></a>";	
}//final de la funcio Editar	

function Borrar($params){
 extract($params);
 $id = $record['id'];
 return "<a href=\"../controller/controllerDeleteEmployee.php?id=$id\"><img border=\"0\" src=\"images/delete.gif\" alt=\"$label\" title=\"$label\" /></a>";		
}
?>
<p></p>
 <table border="0" align="center" cellpadding="5" cellspacing="2" bgcolor="#EDE8C9">
    <tr bgcolor="#FFFFCC">
      <td height="48">
        <font color="#003366" size="2" face="Verdana, Arial, Helvetica, sans-serif">
         <strong>POI (Puntos de interés) gridview</strong>
		</font>
      </td>
    </tr>
  </table>
  
  <br />  
  
<!--POI(id,nombre,foto,descripcion,URL,precio,horario,id_tipo,id_transporte,id_entorno,id_ciudad,id_pais,id_usuario)
PK:id_POI
FK:id_tipo  Tipo(id)
FK:id_transporte Transporte(id)
FK:id_entorno Entorno(id)
FK:id_ciudad Ciudad(id)
FK:id_pais Pais(id)
FK:id_usuario Usuario(id)-->


<table border="0" align="center" bgcolor="#EDE8C9">
    <tr>
      <td valign="middle" align="center" colspan="2">
	    <form name="formbuscar" action="gridEmployees.php" method="post">
			<input name ="buscar" type="text" size="40" value="<?php echo ($_SESSION['buscar'])?>">
			<select name="categoria">
			  <option value="nombre" <?php if ($_SESSION['categoria'] == "nombre") echo 'selected="selected"'?>>Nombre</option>
			  <option value="url" <?php if ($_SESSION['categoria'] == "url") echo 'selected="selected"'?>>URL</option>
			  <option value="precio" <?php if ($_SESSION['categoria'] == "precio") echo 'selected="selected"'?>> Precio</option>		
			  <option value="horario" <?php if ($_SESSION['categoria'] == "horario") echo 'selected="selected"'?>>Horario</option>
			 
				


			</select>			
			<input name ="enviar" type="submit" value="Search">
	    </form>
      </td>
    </tr>
<tr>
<td colspan="2" align="center">

<?php
$mostrar = 15;



$dg =& new Structures_DataGrid($mostrar);
// Define DataGrid Color Attributes

// Define DataGrid Table Attributes
//$dg->renderer->setTableAttribute('width', '25%');
$dg->renderer->setTableAttribute('cellspacing', '1');
$dg->renderer->setTableAttribute('cellpadding', '4');
$dg->renderer->setTableAttribute('class', 'datagrid');


//$dg->renderer->sortIconASC = "&uArr;";
//$dg->renderer->sortIconDESC = "&dArr;";
$dg->renderer->sortIconASC= "&uarr;";
$dg->renderer->sortIconDESC = "&darr;";



// Set empty row table attributes

// Definim les columnes del datagrid
$column = new Structures_DataGrid_Column('nombre', 'nombre', 'nombre', array('align'=>'center'));
$dg->addColumn($column);
$column = new Structures_DataGrid_Column('url', 'url', 'url', array('align'=>'center'));
$dg->addColumn($column);
$column = new Structures_DataGrid_Column('precio', 'precio', 'precio', array('align'=>'center'));
$dg->addColumn($column);
$column = new Structures_DataGrid_Column('horario', 'horario', 'horario', array('align'=>'center'));
$dg->addColumn($column);


/*
$column = new Structures_DataGrid_Column('Nom', 'petnom', 'petnom', array('width' => '255','align'=>'center'));
$dg->addColumn($column);
$column = new Structures_DataGrid_Column('Adreça', ' petadr', ' petadr', array('width' => '255'));
$dg->addColumn($column);
*/

$column = new Structures_DataGrid_Column('      ', null, null, array('align' => 'center'), null, 'Editar($label=Modify)');
$dg->addColumn($column);
$column = new Structures_DataGrid_Column('      ', null, null, array('align' => 'center'), null, 'Imprimir($label=Print PDF)');
$dg->addColumn($column);
//$column = new Structures_DataGrid_Column('      ', null, null, array('align' => 'center'), null, 'Llistar($label=Llistats de peticionari)');
//$dg->addColumn($column);
$column = new Structures_DataGrid_Column('      ', null, null, array('align' => 'center'), null, 'Borrar($label=Delete)');
$dg->addColumn($column);


if(isset($_GET["orderBy"])){$order = $_GET["orderBy"];}
else{$order = "nombre";}

if(isset($_GET["direction"])){$direccio = $_GET["direction"];}
else {$direccio="";}

if(isset($_GET["page"])){$page = (int)$_GET["page"];}
else{$page = 0;}

if(($_SESSION['buscar'])!=''){
 $categoria = $_SESSION["categoria"];
 $buscar = "AND ". $categoria  ." LIKE  '%".$_SESSION["buscar"]."%'";
}
else {$buscar = "";}

$totalobres = "SELECT * FROM poi WHERE 1=1 ";
if (strlen($buscar)) $totalobres .= " ".$buscar;
if (strlen($order)) $totalobres .= " ORDER BY ".$order;
if (strlen($direccio)) $totalobres .= " ".$direccio;

$con = new DB();
$stm = $con->query($totalobres);
$rtotalobres = $stm->fetchAll(PDO::FETCH_ASSOC);

if(count($rtotalobres)>0){
	$dg->bind($rtotalobres);
	// Print the DataGrid
	$dg->render();
	if(strlen($buscar)){
			$dg->renderer->setExtraVars(array("buscar"=>$_SESSION["buscar"],"categoria"=>$categoria));
	}	
	//echo $dg->renderer->getPaging(); OLGA: error al paginar
}else{
	if(strlen($buscar)){
		echo "<p style=\"color:red; padding-left:1em;\">Failed search, there aren't any result.<p>";
	}else{
		echo "<p style=\"color:red; padding-left:1em;\">No registers in DB.<p>";
	}
}

?> 
</td>
</tr>
<tr>
  <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><a href="showMenu.php">Volver al Menu</a></font></td>
  <td align="right">&nbsp;
	
</td>
</tr>
</table>

<?php
include ("footer.php");
?>


