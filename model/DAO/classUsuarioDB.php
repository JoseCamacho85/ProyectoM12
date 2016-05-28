<?php

class UsuarioDB {

    /**
     * metodo para insertar un usuario en la base de datos
     * @param type $user usuario a insertar
     * @return type
     */
    public function insertUser($user) {

        $con = new DB();
        $nonquery = $con->prepare("INSERT INTO usuario (username,password,email,poblacion,idioma,telefono,url,foto,textoPresentacion,esAdministrador,esUsuarioRegistrado,esUsuarioProfesional) VALUES (:username,:password,:email,:poblacion,:idioma,:telefono,:url,:foto,:textoPresentacion,:administrador,:registrado,:professional)");
        $username = $user->getUserName();
        $password = $user->getPassword();
        $email = $user->getEmail();
        $poblacion = $user->getPoblacion();
        $idioma = $user->getIdioma();
        $telefono = $user->getTelefono();
        $url = $user->getUrl();
        $foto = $user->getFoto();
        $textoPresentacion = $user->getTextoPresentacion();
        $administrador = $user->getAdministrador();
        $registrado = $user->getRegistrado();
        $professional = $user->getProfessional();

        $nonquery->bindParam(":username", $username);
        $nonquery->bindParam(":password", md5($password));
        $nonquery->bindParam(":email", $email);
        $nonquery->bindParam(":poblacion", $poblacion);
        $nonquery->bindParam(":idioma", $idioma);
        $nonquery->bindParam(":telefono", $telefono);
        $nonquery->bindParam(":url", $url);
        $nonquery->bindParam(":foto", $foto);
        $nonquery->bindParam(":textoPresentacion", $textoPresentacion);
        $nonquery->bindParam(":administrador", $administrador);
        $nonquery->bindParam(":registrado", $registrado);
        $nonquery->bindParam(":professional", $professional);

        $con->executeNonQuery($nonquery);

        $id = $con->lastInsertId();
        return $id;

        $con = null;
    }

    /**
     * crea un array de usuarios con los resultados de la base de datos
     * @return array array de usuarios
     */
    function fecthUsers() {

        $users = array();

        $con = new DB();
        $sql = $con->prepare("SELECT * FROM usuario");
        $result = $con->executeQuery($sql);

        foreach ($result as $row) {
            $id = $row['id'];
            $username = $row['username'];
            $password = $row['password'];
            $email = $row['email'];
            $poblacion = $row['poblacion'];
            $idioma = $row['idioma'];
            $telefono = $row['telefono'];
            $url = $row['url'];
            $foto = $row['foto'];
            $textoPresentacion = $row['textoPresentacion'];
            $administrador = $row['esAdministrador'];
            $registrado = $row['esUsuarioRegistrado'];
            $professional = $row['esUsuarioProfesional'];
            $user = new Usuario($username, $password, $email, $poblacion, $idioma, $telefono, $url, $foto, $textoPresentacion, $administrador, $registrado, $professional);
            array_push($users, $user);
        }

        return $users;
    }

}

?>