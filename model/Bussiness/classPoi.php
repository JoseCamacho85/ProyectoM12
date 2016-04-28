<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of POI
 *
 * @author Mazu
 */
class Poi {
    
    private $id = null;
    private $nombre;
    private $foto;
    private $descripcion;
    private $url;
    private $precio;
    private $horario;

    function __construct($id, $nombre, $foto, $descripcion, $url, $precio, $horario) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->foto = $foto;
        $this->descripcion = $descripcion;
        $this->url = $url;
        $this->precio = $precio;
        $this->horario = $horario;
    }

    
    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getFoto() {
        return $this->foto;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getUrl() {
        return $this->url;
    }

    function getPrecio() {
        return $this->precio;
    }

    function getHorario() {
        return $this->horario;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setFoto($foto) {
        $this->foto = $foto;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setUrl($url) {
        $this->url = $url;
    }

    function setPrecio($precio) {
        $this->precio = $precio;
    }

    function setHorario($horario) {
        $this->horario = $horario;
    }



}
?>