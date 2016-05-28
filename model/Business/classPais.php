<?php

class Pais {

    private $id = null;
    private $nombre;

    /**
     * constructor de la clase pais
     * @param type $id id del pais
     * @param type $nombre nombre del pais
     */
    function __construct($id, $nombre) {
        $this->id = $id;
        $this->nombre = $nombre;
    }

    /**
     * metodo get de la id del pais
     * @return type
     */
    function getId() {
        return $this->id;
    }

    /**
     * metodo get del nombre del pais
     * @return type
     */
    function getNombre() {
        return $this->nombre;
    }

    /**
     * metodo set de la id del pais
     * @param type $id id del pais
     */
    function setId($id) {
        $this->id = $id;
    }

    /**
     * metodo set del nombre del pais
     * @param type $nombre nombre del pais
     */
    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

}
