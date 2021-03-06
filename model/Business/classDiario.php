<?php

class Diario {

    private $id = null;
    private $nombre;
    private $descripcion;
    private $id_usuario;
/**
 * constructor de la clase diario
 * @param type $id id del objeto diario
 * @param type $nombre nombre del objeto diario
 * @param type $descripcion descripcion del objeto diario
 * @param type $id_usuario id del usaurio dueño del objeto diario
 */
    function __construct($id, $nombre, $descripcion, $id_usuario) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->id_usuario = $id_usuario;
    }
/**
 * metodo get de la id del usuario del anuncio
 * @return type
 */
    function getId_usuario() {
        return $this->id_usuario;
    }
/**
 * metodo set de la id del usuario del anuncio
 * @param type $id_usuario id del usuario del anuncio
 */
    function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }
/**
 * metodo get de la id del anuncio
 * @return type
 */
    function getId() {
        return $this->id;
    }
/**
 * metodo get del nombre del anuncio
 * @return type
 */
    function getNombre() {
        return $this->nombre;
    }
/**
 * metodo get de la descripcion del anuncio
 * @return type
 */
    function getDescripcion() {
        return $this->descripcion;
    }
/**
 * metodo set de la id del anuncio
 * @param type $id id del anuncio
 */
    function setId($id) {
        $this->id = $id;
    }
/**
 * metodo set del nombre del anuncio
 * @param type $nombre nombre del anuncio
 */
    function setNombre($nombre) {
        $this->nombre = $nombre;
    }
/**
 * metodo set de la descripcion del anuncio
 * @param type $descripcion descripcion del anuncio
 */
    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }
/**
 * metodo que instancia un objeto diarioDB para añadir un diario a la base de datos
 * @return type
 */
    public function persist() {
        $diarioDAO = new DiarioDB();
        $id = $diarioDAO->insertDiario($this);
        return $id;
    }

}
