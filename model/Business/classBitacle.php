<?php
include_once("model/functionAutoload.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of classBitacle
 *
 * @author Mazu
 */
class Bitacle {
    private $id = null;
    private $nom;
    private $users = null;
    private $pois = null;
    private $rutas = null;
    private $diarios = null;
    private $anuncios = null;
    
    function __construct($nom) {
        $this->id = $id;
        $this->nom = $nom;
        $this->users = array();
        $this->pois = array();
        $this->rutas = array();
        $this->diarios = array();
        $this->anuncios = array();
    }
    
    function getId() {
        return $this->id;
    }

    function getNom() {
        return $this->nom;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    public function getUsers(){
        return $this->users;
    }

    public function setUsers($users){
        $this->users = $users;
    }

    public function getPois(){
        return $this->pois;
    }

    public function setPois($pois){
        $this->pois = $pois;
    }

    public function getRutas(){
        return $this->rutas;
    }

    public function setRutas($rutas){
        $this->rutas = $rutas;
    }

    public function getDiarios(){
        return $this->diarios;
    }

    public function setDiarios($diarios){
        $this->diarios = $diarios;
    }

public function insertUser($id,$username,$password,$email,$poblacion,$idioma,$telefono,$url,$foto,$textoPresentacion){   
    $user = new Usuario($id,$username,$password,$email,$poblacion,$idioma,$telefono,$url,$foto,$textoPresentacion);
    $id = $user->persist();
    $user->setId($id);
    array_push($this->users,$user);
    return $user;
}

public function insertPoi(){   
    
}

public function insertRuta(){   
    
}

public function insertDiario(){   
    
}

public function insertAnuncio(){

}

    
}
