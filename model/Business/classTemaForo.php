<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of classTemaForo
 *
 * @author Mazu
 */
class TemaForo {
    private $id = null;
    private $titulo;
    
    function __construct($id, $titulo) {
        $this->id = $id;
        $this->titulo = $titulo;
    }

    function getId() {
        return $this->id;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }


    
    
}
