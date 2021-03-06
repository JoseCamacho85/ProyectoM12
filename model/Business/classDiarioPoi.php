<?php

class DiarioPoi {

    private $idDiario = null;
    private $idPoi = null;

    /**
     * constructor de la clase diario poi
     * @param type $idDiario diario sobre el que se inserta un poi
     * @param type $idPoi poi a insertar en el diario
     */
    function __construct($idDiario, $idPoi) {
        $this->idDiario = $idDiario;
        $this->idPoi = $idPoi;
    }

    /**
     * metodo get de la id del diario de la clase diarioPoi
     * @return type
     */
    function getIdDiario() {
        return $this->idDiario;
    }

    /**
     * metodo get de la id del poi de la clase diarioPoi
     * @return type
     */
    function getIdPoi() {
        return $this->idPoi;
    }

    /**
     * metodo set de la id del diario de la clase diarioPoi
     * @param type $idDiario id del diario
     */
    function setIdDiario($idDiario) {
        $this->idDiario = $idDiario;
    }

    /**
     * metodo set de la id del poi de la clase diariPoi
     * @param type $idPoi id del poi
     */
    function setIdPoi($idPoi) {
        $this->idPoi = $idPoi;
    }

}
