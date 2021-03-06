<?php

class MensajePrivadoDB {

    /**
     * metodo para insertar un mensaje privado en la base de datos
     * @param type $MP mensaje privado
     */
    public function insertMensajePrivado($MP) {

        $con = new DB();

        $nonquery = $con->prepare("INSERT INTO mensajeprivado (titulo,texto,destinatario,id_usuario)"
                . "VALUES(:titulo,:texto,:destinatario,:id_usuario)");


        $titulo = $MP->getTitulo();
        $message = $MP->getTexto();
        $usuarioReceptor = $MP->getDestinatario();
        $id_usuario = $MP->getId_emisor();


        $nonquery->bindParam(":titulo", $titulo);
        $nonquery->bindParam(":texto", $message);
        $nonquery->bindParam(":destinatario", $usuarioReceptor);
        $nonquery->bindParam(":id_usuario", $id_usuario);


        print_r($nonquery);

        $con->executeNonQuery($nonquery);

        $con = null;
    }

}
