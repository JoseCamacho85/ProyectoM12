<?php

function showAnuncio($idPOI){
	$bitacle = unserialize($_SESSION['bitacle']);
	for ($i=0; $i < count($bitacle->getAnuncios()); $i++) { 
          if($bitacle->getAnuncios()[$i]->getPoi() == $idPOI){
            echo "<div><h3>Punto profesional</h3></div>";
            echo "<div><h3>".$bitacle->getAnuncios()[$i]->getTitulo()."</h3></div>";         
            echo "<div><span>".$bitacle->getAnuncios()[$i]->getImagen()."</span></div>";
            echo "<div><span>".$bitacle->getAnuncios()[$i]->getDescripcion()."</span></div>";
            echo "<br>";

          }
      }
}

?>