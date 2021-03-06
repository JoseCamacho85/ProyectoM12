<?php

class Ciudad {

    private $id = null;
    private $nombre;
    private $id_pais;

    /**
     * constructor de la clase ciudad
     * @param type $id id del objeto ciudad
     * @param type $nombre nombre del objeto ciudad
     * @param type $id_pais pais del objeto ciudad
     */
    function __construct($id, $nombre, $id_pais) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->id_pais = $id_pais;
    }

    /**
     * metodo get de la id de la clase ciudad
     * @return type
     */
    function getId() {
        return $this->id;
    }

    /**
     * metodo get del nombre de la clase ciudad
     * @return type
     */
    function getNombre() {
        return $this->nombre;
    }

    /**
     * metodo set de la id de la clase ciudad
     * @param type $id id de la ciudad
     */
    function setId($id) {
        $this->id = $id;
    }

    /**
     * metodo set del nombre de la clase ciudad
     * @param type $nombre nombre de la ciudad
     */
    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    /**
     * metodo get de la id de pais de la clase ciudad
     * @return type
     */
    function getId_pais() {
        return $this->id_pais;
    }

    /**
     * metodo set de la id del pais de la clase ciudad
     * @param type $id_pais id del pais de la ciudad
     */
    function setId_pais($id_pais) {
        $this->id_pais = $id_pais;
    }

}
