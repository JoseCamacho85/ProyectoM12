<?php

function showAnuncio($idPOI){
	$bitacle = unserialize($_SESSION['bitacle']);
	for ($i=0; $i < count($bitacle->getAnuncios()); $i++) { 
          if($bitacle->getAnuncios()[$i]->getPoi() == $idPOI){
            echo "<div id=\"publi\">";
            echo "<div id=\"TituloPubli\">Publicidad:</div>";
            echo "<div id=\"TituloAnuncio\">".$bitacle->getAnuncios()[$i]->getTitulo()."</div>";         
            //echo "<div><span>".$bitacle->getAnuncios()[$i]->getImagen()."</span></div>";
            echo "<div><span>".$bitacle->getAnuncios()[$i]->getDescripcion()."</span></div>";
            echo "</div>";
          }
      }
}

?>