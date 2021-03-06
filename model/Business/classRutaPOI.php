<?php

class RutaPOI {

    private $idRuta = null;
    private $idPOI = null;

    /**
     * constructor de la clase ruta poi
     * @param type $idRuta id de la ruta donde se insertara un poi
     * @param type $idPOI poi que se insertara en la ruta
     */
    function __construct($idRuta, $idPOI) {
        $this->idRuta = $idRuta;
        $this->idPOI = $idPOI;
    }

    /**
     * metodo get de la id del poi de la clase ruta poi
     * @return type
     */
    function getIdPOI() {
        return $this->idPOI;
    }

    /**
     * metodo get de la id de la ruta de la clase ruta poi
     * @return type
     */
    function getIdRuta() {
        return $this->idRuta;
    }

    /**
     * metodo set de la id del poi de la clase ruta poi
     * @param type $idPOI id del poi
     */
    function setIdPOI($idPOI) {
        $this->idPOI = $idPOI;
    }

    /**
     * metodo set de la id de la ruta del la clase ruta poi
     * @param type $idRuta id de la ruta
     */
    function setIdRuta($idRuta) {
        $this->idRuta = $idRuta;
    }

    /**
     * metodo que instancia un objeto rutaPoiDB para añadir un poi dentro de una ruta
     */
    public function persist() {
        $rutaPOI = new RutaPOIDB();
        $rutaPOI->insertRutaPOI($this);
    }

}
