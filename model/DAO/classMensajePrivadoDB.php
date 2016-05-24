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
        
        $nonquery = $con->prepare("INSERT INTO mensajeprivado (titulo,texto,destinatario,id_usuario)"
                . "VALUES(:titulo,:texto,:destinatario,:id_usuario)");
        
        
        $titulo=$MP->getTitulo();           
        $message=$MP->getTexto();     
        $usuarioReceptor=$MP->getDestinatario();
        $id_usuario=$MP->getId_emisor();
        
      
        $nonquery->bindParam(":titulo",$titulo);
        $nonquery->bindParam(":texto",$message);
        $nonquery->bindParam(":destinatario",$usuarioReceptor);
        $nonquery->bindParam(":id_usuario",$id_usuario);
        
        
        print_r($nonquery);
        
        $con->executeNonQuery($nonquery);
            
        $con=null;
    }
}
