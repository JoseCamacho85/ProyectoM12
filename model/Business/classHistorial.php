<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of classHistorial
 *
 * @author raibsa
 */
class Historial {

    private $id_diario;
    private $id_poi;
    private $fechaVisitaPoi;
    private $estaEnPoi;
    private $texto;
    private $foto;
    private $video;

    function __construct($id_diario, $id_poi, $fechaVisitaPoi, $estaEnPoi, $texto, $foto, $video) {
        $this->setId_diario($id_diario);
        $this->setId_poi($id_poi);
        $this->setFechaVisitaPoi($fechaVisitaPoi);
        $this->setEstaEnPoi($estaEnPoi);
        $this->setTexto($texto);
        $this->setFoto($foto);
        $this->setVideo($video);
    }

    function getId_diario() {
        return $this->id_diario;
    }

    function getId_poi() {
        return $this->id_poi;
    }

    function getFechaVisitaPoi() {
        return $this->fechaVisitaPoi;
    }

    function getEstaEnPoi() {
        return $this->estaEnPoi;
    }

    function getTexto() {
        return $this->texto;
    }

    function getFoto() {
        return $this->foto;
    }

    function getVideo() {
        return $this->video;
    }

    function setId_diario($id_diario) {
        $this->id_diario = $id_diario;
    }

    function setId_poi($id_poi) {
        $this->id_poi = $id_poi;
    }

    function setFechaVisitaPoi($fechaVisitaPoi) {
        $this->fechaVisitaPoi = $fechaVisitaPoi;
    }

    function setEstaEnPoi($estaEnPoi) {
        $this->estaEnPoi = $estaEnPoi;
    }

    function setTexto($texto) {
        $this->texto = $texto;
    }

    function setFoto($foto) {
        $this->foto = $foto;
    }

    function setVideo($video) {
        $this->video = $video;
    }

}
