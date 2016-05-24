<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of classTipo
 *
 * @author Mazu
 */
class Tipo {
    private $id = null;
    private $nombre;
    
    
    function __construct($id, $nombre) {
        $this->id = $id;
        $this->nombre = $nombre;
    }

    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function persist() {
        $tipoDAO = new TipoDB();
        $id = $tipoDAO->insertTipo($this);
        return $id;
    }    
    
}
