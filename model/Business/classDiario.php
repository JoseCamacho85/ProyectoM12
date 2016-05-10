<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of classDiario
 *
 * @author Mazu
 */
class Diario {
    private $id = null;
    private $nombre;
    private $descripcion;
    private $usuario;
    
    function __construct($id, $nombre, $descripcion,$usuario) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->usuario = $usuario;
    }

    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    public function persist() {
        $diarioDAO = new DiarioDB();
        $id = $diarioDAO->insertDiario($this);
        return $id;
    }
}
