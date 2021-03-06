<?php

class Entorno {

    private $id = null;
    private $nombre;

    /**
     * constructor de la clase entorno
     * @param type $id id del entorno
     * @param type $nombre nombre del entorno
     */
    function __construct($id, $nombre) {
        $this->id = $id;
        $this->nombre = $nombre;
    }

    /**
     * metodo get de la id de la clase entorno
     * @return type
     */
    function getId() {
        return $this->id;
    }

    /**
     * metodo get del nombre de la clase entorno
     * @return type
     */
    function getNombre() {
        return $this->nombre;
    }

    /**
     * metodo set de la id de la clase entorno
     * @param type $id id del entorno
     */
    function setId($id) {
        $this->id = $id;
    }

    /**
     * metodo set del nombre de la clase entorno
     * @param type $nombre nombre del entorno
     */
    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    /**
     * metodo que instancia un objeto entornoDB para añadir un entorno a la base de datos
     * @return type
     */
    public function persist() {
        $entornoDAO = new EntornoDB();
        $id = $entornoDAO->insertEntorno($this);
        return $id;
    }

}
