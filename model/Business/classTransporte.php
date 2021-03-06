<?php

class Transporte {

    private $id = null;
    private $nombre;

    /**
     * constructor de la clase transporte de poi
     * @param type $id id del transporte de poi
     * @param type $nombre nombre del transporte de poi
     */
    function __construct($id, $nombre) {
        $this->id = $id;
        $this->nombre = $nombre;
    }

    /**
     * metodo get de la id del transporte de poi
     * @return type
     */
    function getId() {
        return $this->id;
    }

    /**
     * metodo get del nombre del transporte de poi
     * @return type
     */
    function getNombre() {
        return $this->nombre;
    }

    /**
     * metodo set de la id del transporte de poi
     * @param type $id id del transporte de poi
     */
    function setId($id) {
        $this->id = $id;
    }

    /**
     * metodo set del nombre del transporte de poi
     * @param type $nombre nombre del transporte de poi
     */
    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    /**
     * metodo que instancia un objeto transporteDB para añadir un transporte de poi a la base de datos
     * @return type
     */
    public function persist() {
        $transporteDAO = new TransporteDB();
        $id = $transporteDAO->insertTransporte($this);
        return $id;
    }

}
