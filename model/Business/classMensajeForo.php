<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of classMensajeForo
 *
 * @author Mazu
 */
class MensajeForo {
    private $id = null;
    private $texto;
    
    function __construct($id, $texto) {
        $this->id = $id;
        $this->texto = $texto;
    }

    function getId() {
        return $this->id;
    }

    function getTexto() {
        return $this->texto;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTexto($texto) {
        $this->texto = $texto;
    }


    
}
