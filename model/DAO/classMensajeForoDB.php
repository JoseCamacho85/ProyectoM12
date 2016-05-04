<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of classMensajeForoDB
 *
 * @author toni
 */
class MensajeForoDB {
    public function insertMensajeForo($MF){
        $con = new Database();                 
        $nonquery = $con->prepare("INSERT INTO mensajeForo(texto) "
                . "VALUES (:texto)");
        $texto=$MF->getTexto();
        $nonquery->bindParam(":texto",$texto);
        $con->executeNonQuery($nonquery);
        $con=null;
    }
}
