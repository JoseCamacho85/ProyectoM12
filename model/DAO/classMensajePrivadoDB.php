<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of classMensajePrivadoDB
 *
 * @author toni
 */
class MensajePrivadoDB {
    public function insertMensajePrivado($MP){
        $con = new DB();               
        $nonquery = $con->prepare("INSERT INTO mensajeprivado (titulo,texto,destinatario,id_usuario) VALUES("
            ."titulo,texto,destinatario,id_usuario'");
        $nombre=$MP->getNombre();           
        $descripcion=$diario->getDescripcion();
        
        $nonquery->bindParam(":nombre",$nombre);
        $nonquery->bindParam(":texto",$descripcion);
            
        $con->executeNonQuery($nonquery);
            
        $con=null;
    }
}
