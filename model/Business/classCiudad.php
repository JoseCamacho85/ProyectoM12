<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of classCiudad
 *
 * @author Mazu
 */
class Ciudad {

    private $id = null;
    private $nombre;
    private $id_pais;

    function __construct($id, $nombre, $id_pais) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->id_pais = $id_pais;
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

    function getId_pais() {
        return $this->id_pais;
    }

    function setId_pais($id_pais) {
        $this->id_pais = $id_pais;
    }

}
