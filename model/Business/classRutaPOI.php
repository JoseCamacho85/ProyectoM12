<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of classRutaPOI
 *
 * @author Mazu
 */
class RutaPOI {
    private $idPOI = null;
    private $idRuta = null;
    
    
    
    function __construct($idPOI, $idRuta) {
        $this->idPOI = $idPOI;
        $this->idRuta = $idRuta;
    }

    function getIdPOI() {
        return $this->idPOI;
    }

    function getIdRuta() {
        return $this->idRuta;
    }

    function setIdPOI($idPOI) {
        $this->idPOI = $idPOI;
    }

    function setIdRuta($idRuta) {
        $this->idRuta = $idRuta;
    }
    public function persist() {
        $rutaPOI = new RutaPOIDB();
        $id = $rutaPOI->insertRutaPOI($this);
        return $id;
    }
    
}
