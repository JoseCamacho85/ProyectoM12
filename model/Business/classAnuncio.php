<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of classAnuncio
 *
 * @author Mazu
 */
class Anuncio {
    private $id = null;
    private $titulo;
    private $descripcion;
    private $imagen;
    private $usuario;
    private $poi;
    
    function __construct($id, $titulo, $descripcion, $imagen, $poi, $usuario) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
        $this->imagen = $imagen;
        $this->usuario = $usuario;
        $this->poi = $poi;
    }

        function getUsuario() {
        return $this->usuario;
    }

    function getPoi() {
        return $this->poi;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setPoi($poi) {
        $this->poi = $poi;
    }

        
    function getId() {
        return $this->id;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getImagen() {
        return $this->imagen;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setImagen($imagen) {
        $this->imagen = $imagen;
    }
    
      public function persist() {
        $anuncioDAO = new anuncioDB();
        $id = $anuncioDAO->insertAnuncio($this);
        return $id;
    }


    
}
