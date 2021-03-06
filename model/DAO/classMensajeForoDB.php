<?php

class MensajeForoDB {

    /**
     * metodo para insertar un mensaje del foro en la base de datos
     * @param type $MF mensaje de foro
     */
    public function insertMensajeForo($MF) {
        $con = new Database();
        $nonquery = $con->prepare("INSERT INTO mensajeForo(texto) "
                . "VALUES (:texto)");
        $texto = $MF->getTexto();
        $nonquery->bindParam(":texto", $texto);
        $con->executeNonQuery($nonquery);
        $con = null;
    }

}
