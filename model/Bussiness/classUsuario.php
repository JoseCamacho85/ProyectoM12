<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of classUsuario
 *
 * @author Mazu
 */
class Usuario {
    
    private $id;
    private $user;
    private $password;
    private $email;
    private $poblacion;
    private $idioma;
    private $movil;
    private $url;
    private $foto;
    private $textoPresentacion;
    
    function __construct($id, $user, $password, $email, $poblacion, $idioma, $movil, $url, $foto, $textoPresentacion) {
        $this->id = $id;
        $this->user = $user;
        $this->password = $password;
        $this->email = $email;
        $this->poblacion = $poblacion;
        $this->idioma = $idioma;
        $this->movil = $movil;
        $this->url = $url;
        $this->foto = $foto;
        $this->textoPresentacion = $textoPresentacion;
    }

    
    function getId() {
        return $this->id;
    }

    function getUser() {
        return $this->user;
    }

    function getPassword() {
        return $this->password;
    }

    function getEmail() {
        return $this->email;
    }

    function getPoblacion() {
        return $this->poblacion;
    }

    function getIdioma() {
        return $this->idioma;
    }

    function getMovil() {
        return $this->movil;
    }

    function getUrl() {
        return $this->url;
    }

    function getFoto() {
        return $this->foto;
    }

    function getTextoPresentacion() {
        return $this->textoPresentacion;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setUser($user) {
        $this->user = $user;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPoblacion($poblacion) {
        $this->poblacion = $poblacion;
    }

    function setIdioma($idioma) {
        $this->idioma = $idioma;
    }

    function setMovil($movil) {
        $this->movil = $movil;
    }

    function setUrl($url) {
        $this->url = $url;
    }

    function setFoto($foto) {
        $this->foto = $foto;
    }

    function setTextoPresentacion($textoPresentacion) {
        $this->textoPresentacion = $textoPresentacion;
    }


    
    
}
