<?php

class Tipo {

    private $id = null;
    private $nombre;

    /**
     * constructor de la clase tipo de poi
     * @param type $id id del tipo de poi
     * @param type $nombre nombre del tipo de poi
     */
    function __construct($id, $nombre) {
        $this->id = $id;
        $this->nombre = $nombre;
    }

    /**
     * metodo get de la id del tipo de poi
     * @return type
     */
    function getId() {
        return $this->id;
    }

    /**
     * metodo get del nombre del tipo de poi
     * @return type
     */
    function getNombre() {
        return $this->nombre;
    }

    /**
     * metodo set de la id del tipo de poi
     * @param type $id id del tipo de poi
     */
    function setId($id) {
        $this->id = $id;
    }

    /**
     * metodo set del nombre de tipo de poi
     * @param type $nombre nombre del tipo de poi
     */
    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    /**
     * metodo que instancia un objeto tipoDB para añadir un tipo de poi a la base de datos
     * @return type
     */
    public function persist() {
        $tipoDAO = new TipoDB();
        $id = $tipoDAO->insertTipo($this);
        return $id;
    }

}
