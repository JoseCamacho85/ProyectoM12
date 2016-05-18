<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of classDiarioPoi
 *
 * @author jose
 */
class DiarioPoi {

    private $idDiario = null;
    private $idPoi = null;

    function __construct($idDiario, $idPoi) {
        $this->idDiario = $idDiario;
        $this->idPoi = $idPoi;
    }

    function getIdDiario() {
        return $this->idDiario;
    }

    function getIdPoi() {
        return $this->idPoi;
    }

    function setIdDiario($idDiario) {
        $this->idDiario = $idDiario;
    }

    function setIdPoi($idPoi) {
        $this->idPoi = $idPoi;
    }

}
