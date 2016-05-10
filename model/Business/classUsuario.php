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
    
    private $id=null;
    private $username;
    private $password;
    private $email;
    private $poblacion;
    private $idioma;
    private $telefono;
    private $url;
    private $foto;
    private $textoPresentacion;
    
    function __construct($id, $username, $password, $email, $poblacion, $idioma, $telefono, $url, $foto, $textoPresentacion) {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->poblacion = $poblacion;
        $this->idioma = $idioma;
        $this->telefono = $telefono;
        $this->url = $url;
        $this->foto = $foto;
        $this->textoPresentacion = $textoPresentacion;
    }

    
    function getId() {
        return $this->id;
    }

    function getUsername() {
        return $this->username;
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

    function getTelefono() {
        return $this->telefono;
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

    function setUsername($username) {
        $this->username = $username;
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

    function setTelefono($telefono) {
        $this->telefono = $telefono;
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


 public function persist() {
        $userDAO = new UsuarioDB();
        $id = $userDAO->insertUser($this);
        return $id;
    }

    
    
}
