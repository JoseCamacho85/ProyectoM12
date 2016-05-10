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
    
    function __construct($nom) {
        $this->id = $id;
        $this->nom = $nom;
        $this->users = array();
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
 /*
  public function insertEmployees($id, $name, $surname, $nif, $category){
        $employee = new Employee($id, $name, $surname, $nif, $category);
        $id = $employee->persist();
        $employee->setId($id);    
        array_push($this->employees, $employee);
        return $employee;
        
    }
     <p>Nombre de usuario: <input type="text" name="username" maxlength="25" required /></p>
    <p>Contraseña: <input type="password" name="password" maxlength="25" required /></p>
    <p>E-mail: <input type="email" name="email" maxlength="50" required /></p>
    <p>Población: <input type="text" name="poblacion" maxlength="50" /></p>
    <p>Idioma: <input type="text" name="idioma" maxlength="25" /></p>
    <p>Teléfono: <input type="text" name="telefono" maxlength="11" /></p>
    <p>URL: <input type="text" name="url" maxlength="50" /></p>
    <p>Foto: <input type="text" name="foto" /></p> <!-- Ver si hay algún plugin para examinar imagen -->
    <p>Texto de presentación:</p>
    <textarea rows="4" cols="30"></textarea><br/>
    <input type="submit" value="Registrarse" name="submit"/>
*/

public function insertUser($id,$username,$password,$email,$poblacion,$idioma,$telefono,$url,$foto,$textoPresentacion){
    
    $user = new Usuario($id,$username,$password,$email,$poblacion,$idioma,$telefono,$url,$foto,$textoPresentacion);
    $id = $user->persist();
    $user->setId($id);
    array_push($this->users,$user);
    return $user;



}

    
}
