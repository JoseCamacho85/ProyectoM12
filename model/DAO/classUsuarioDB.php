<?php

class UsuarioDB {

public function insertUser($user){



$con = new DB();                 
            //$nonquery = $con->prepare("INSERT INTO employees VALUES (NULL,:name,:surname,:nif,:category)");
            $nonquery = $con->prepare("INSERT INTO usuario (username,password,email,poblacion,idioma,telefono,url,foto,textoPresentacion) VALUES (:username,:password,:email,:poblacion,:idioma,:telefono,:url,:foto,:textoPresentacion)");
            $username=$user->getUserName();
            $password=$user->getPassword();
            $email=$user->getEmail();
            $poblacion=$user->getPoblacion();
            $idioma=$user->getIdioma();
            $telefono=$user->getTelefono();
			$url=$user->getUrl();
			$foto=$user->getFoto();
			$textoPresentacion=$user->getTextoPresentacion();

            
            $nonquery->bindParam(":username",$username);
            $nonquery->bindParam(":password",$password);
            $nonquery->bindParam(":email",$email);
            $nonquery->bindParam(":poblacion",$poblacion);
            $nonquery->bindParam(":idioma",$idioma);
            $nonquery->bindParam(":telefono",$telefono);
            $nonquery->bindParam(":url",$url);
            $nonquery->bindParam(":foto",$foto);
            $nonquery->bindParam(":textoPresentacion",$textoPresentacion);

            
            $con->executeNonQuery($nonquery);

            $sql = $con->prepare("SELECT id FROM usuario WHERE username = '".$username."'");
            $result=$con->executeQuery($sql);

            foreach ($result as $row) {        
            $id           = $row['id'];   
            return $id;    
            }                       
            $con=null;

    }
      function fecthUsers(){

        $users = array();

            $con = new DB();
            $sql = $con->prepare("SELECT * FROM usuario");
            $result=$con->executeQuery($sql);

            foreach ($result as $row) {        
            $id           = $row['id'];       
            $username   = $row['username'];
            $password   = $row['password'];
            $email   = $row['email'];
            $poblacion  = $row['poblacion'];
            $idioma  = $row['idioma'];
            $telefono  = $row['telefono'];
            $url  = $row['url'];
            $foto  = $row['foto'];
            $textoPresentacion  = $row['textoPresentacion'];
            $user= new Usuario($username,$password,$email,$poblacion,$idioma,$telefono,$url,$foto,$textoPresentacion);
            array_push($users,$user);
            }

        return $users;
    } 

}

?>