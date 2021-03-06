<?php

include("dbConnector.php");

class BitacleDB {

    /**
     * comprueba que el usuario y contraseña correspondan con los introducidos
     * @param type $user usuario
     * @param type $password contraseña
     * @return boolean
     */
    function fetchValidateUser($user, $password) {
        $sql = "SELECT * FROM usuario WHERE username = '" . $user . "'";
        $con = new DB();
        $result = $con->query($sql);
        $ok = false;
        if ($row = $result->fetch(PDO::FETCH_ASSOC)) {

            if ($user === $row['username']) {
                if (md5($password) === $row['password']) {
                    $ok = true;
                } else {
                    $ok = false;
                }
            } else {
                $ok = false;
            }
        }
        return $ok;
    }

    /**
     * crea un array de anuncios con los resultados de la base de datos
     * @return array array de anuncios
     */
    function fetchAnuncio() {

        $anuncios = array();

        $con = new DB();
        $sql = $con->prepare("SELECT * FROM anuncio");
        $result = $con->executeQuery($sql);

        foreach ($result as $row) {
            $id = $row['id'];
            $titulo = $row['titulo'];
            $descripcion = $row['descripcion'];
            $imagen = $row['imagen'];
            $id_poi = $row['id_poi'];
            $id_usuario = $row['id_usuario'];
            $anuncio = new Anuncio($id, $titulo, $descripcion, $imagen, $id_poi, $id_usuario);
            array_push($anuncios, $anuncio);
        }

        return $anuncios;
    }

    /**
     * crea un array de diarios con los resultados de la base de datos
     * @return array array de diarios
     */
    function fetchDiario() {

        $diarios = array();

        $con = new DB();
        $sql = $con->prepare("SELECT * FROM diario");
        $result = $con->executeQuery($sql);

        foreach ($result as $row) {
            $id = $row['id'];
            $nombre = $row['nombre'];
            $descripcion = $row['descripcion'];
            $id_usuario = $row['id_usuario'];
            $diario = new Diario($id, $nombre, $descripcion, $id_usuario);
            array_push($diarios, $diario);
        }

        return $diarios;
    }

    /**
     * crea un array de rutas con los resultados de la base de datos
     * @return array array de rutas
     */
    function fetchRuta() {

        $rutas = array();

        $con = new DB();
        $sql = $con->prepare("SELECT * FROM ruta");
        $result = $con->executeQuery($sql);

        foreach ($result as $row) {
            $id = $row['id'];
            $nombre = $row['nombre'];
            $descripcion = $row['descripcion'];
            $id_usuario = $row['id_usuario'];
            $ruta = new Ruta($id, $nombre, $descripcion, $id_usuario);
            array_push($rutas, $ruta);
        }

        return $rutas;
    }

    /**
     * crea un array de ciudades con los resultados de la base de datos
     * @return array array de ciudades
     */
    function fetchCiudad() {

        $ciudades = array();

        $con = new DB();
        $sql = $con->prepare("SELECT * FROM ciudad");
        $result = $con->executeQuery($sql);

        foreach ($result as $row) {
            $id = $row['id'];
            $nombre = $row['nombre'];
            $id_pais = $row['id_pais'];
            $ciudad = new Ciudad($id, $nombre, $id_pais);
            array_push($ciudades, $ciudad);
        }

        return $ciudades;
    }

    /**
     * crea un array de enntornos con los resultados de la base de datos
     * @return array array de entornos
     */
    function fetchEntorno() {

        $entornos = array();

        $con = new DB();
        $sql = $con->prepare("SELECT * FROM entorno");
        $result = $con->executeQuery($sql);

        foreach ($result as $row) {
            $id = $row['id'];
            $nombre = $row['nombre'];
            $entorno = new Entorno($id, $nombre);
            array_push($entornos, $entorno);
        }

        return $entornos;
    }

    /**
     * crea un array de paises con los resultados de la base de datos
     * @return array array de paises
     */
    function fetchPais() {

        $paises = array();

        $con = new DB();
        $sql = $con->prepare("SELECT * FROM pais");
        $result = $con->executeQuery($sql);

        foreach ($result as $row) {
            $id = $row['id'];
            $nombre = $row['nombre'];
            $pais = new Pais($id, $nombre);
            array_push($paises, $pais);
        }

        return $paises;
    }

    /**
     * crea un array de pois con los resultados de la base de datos
     * @return array array de pois
     */
    function fetchPoi() {

        $pois = array();

        $con = new DB();
        $sql = $con->prepare("SELECT * FROM poi");
        $result = $con->executeQuery($sql);

        foreach ($result as $row) {
            $id = $row['id'];
            $nombre = $row['nombre'];
            $foto = $row['foto'];
            $descripcion = $row['descripcion'];
            $url = $row['url'];
            $precio = $row['precio'];
            $horario = $row['horario'];
            $id_tipo = $row['id_tipo'];
            $id_transporte = $row['id_transporte'];
            $id_entorno = $row['id_entorno'];
            $id_ciudad = $row['id_ciudad'];
            $id_pais = $row['id_pais'];
            $id_usuario = $row['id_usuario'];
            $poi = new Poi($id, $nombre, $foto, $descripcion, $url, $precio, $horario, $id_tipo, $id_transporte, $id_entorno, $id_ciudad, $id_pais, $id_usuario);
            array_push($pois, $poi);
        }

        return $pois;
    }

    /**
     * crea un array de tipos de poi con los resultados de la base de datos
     * @return array array de tipos de poi
     */
    function fetchTipo() {

        $tipos = array();

        $con = new DB();
        $sql = $con->prepare("SELECT * FROM tipo");
        $result = $con->executeQuery($sql);

        foreach ($result as $row) {
            $id = $row['id'];
            $nombre = $row['nombre'];
            $tipo = new Tipo($id, $nombre);
            array_push($tipos, $tipo);
        }

        return $tipos;
    }

    /**
     * crea un array de transportes con los resultados de la base de datos
     * @return array array de transportes
     */
    function fetchTransporte() {

        $transportes = array();

        $con = new DB();
        $sql = $con->prepare("SELECT * FROM transporte");
        $result = $con->executeQuery($sql);

        foreach ($result as $row) {
            $id = $row['id'];
            $nombre = $row['nombre'];
            $transporte = new Transporte($id, $nombre);
            array_push($transportes, $transporte);
        }

        return $transportes;
    }

    /**
     * crea un array de usuarios con los resultados de la base de datos
     * @return array array de usuarios
     */
    function fetchUsuario() {

        $usuarios = array();

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
            $usuario = new Usuario($id, $username, $password, $email, $poblacion, $idioma, $telefono, $url, $foto, $textoPresentacion, $administrador, $registrado, $professional);
            array_push($usuarios, $usuario);
        }

        return $usuarios;
    }

    /**
     * crea un array de historial con los resultados de la base de datos
     * @return array array de historial
     */
    function fetchHistorial() {

        $historiales = array();

        $con = new DB();
        $sql = $con->prepare("SELECT * FROM historial");
        $result = $con->executeQuery($sql);

        foreach ($result as $row) {
            $id_diario = $row['id_diario'];
            $id_poi = $row['id_poi'];
            $fechaVisitaPoi = $row['fechaVisitaPoi'];
            $estaEnPoi = $row['estaEnPoi'];
            $texto = $row['texto'];
            $foto = $row['foto'];
            $video = $row['video'];
            $historial = new Historial($id_diario, $id_poi, $fechaVisitaPoi, $estaEnPoi, $texto, $foto, $video);
            array_push($historiales, $historial);
        }

        return $historiales;
    }

    /**
     * busca un mensaje privado para enviarselo al destinatario
     * @param type $Destinatario usuario que recibe el mp
     * @return array
     */
    function searchMP($Destinatario) {
        $con = new DB();

        $MPS = array();

        $sql = $con->prepare("SELECT * FROM mensajeprivado where destinatario='$Destinatario'");

        $result = $con->executeQuery($sql);

        foreach ($result as $row) {
            $id_MP = $row['id'];
            $titulo = $row['titulo'];
            $texto = $row['texto'];
            $destinatario = $row['destinatario'];
            $id_usuario = $row['id_usuario'];

            $MensajePrivado = new MensajePrivado($id_MP, $titulo, $texto, $destinatario, $id_usuario);
            array_push($MPS, $MensajePrivado);
        }

        return $MPS;
    }

    /**
     * crea una query
     * @param type $fields array de campos
     * @param type $fieldNames array de valores
     * @return array
     */
    function crearQueryDB($fields, $fieldNames) {

        $query = "SELECT * FROM POI WHERE ";

        for ($i = 0; $i < count($fields); $i++) {
            if ($fields[$i] != null) {
                if ($i == count($fields) - 1) {
                    $query .= $fieldNames[$i] . "=" . $fields[$i] . "  ";
                } else {
                    $query .= $fieldNames[$i] . "=" . $fields[$i] . " and ";
                }
            }
        }

        $pois = array();

        $con = new DB();
        $sql = $con->prepare($query);
        $result = $con->executeQuery($sql);

        foreach ($result as $row) {
            $id = $row['id'];
            $nombre = $row['nombre'];
            $foto = $row['foto'];
            $descripcion = $row['descripcion'];
            $url = $row['url'];
            $precio = $row['precio'];
            $horario = $row['horario'];
            $id_tipo = $row['id_tipo'];
            $id_transporte = $row['id_transporte'];
            $id_entorno = $row['id_entorno'];
            $id_ciudad = $row['id_ciudad'];
            $id_pais = $row['id_pais'];
            $id_usuario = $row['id_usuario'];
            $poi = new Poi($id, $nombre, $foto, $descripcion, $url, $precio, $horario, $id_tipo, $id_transporte, $id_entorno, $id_ciudad, $id_pais, $id_usuario);
            array_push($pois, $poi);
        }
        return $pois;
    }

    /**
     * carga un dropdown de pois a raíz de la ruta seleccionada
     * @param type $idRuta ruta seleccionada
     * @return array
     */
    function DropdownPoisRuta($idRuta) {

        $arrayRutaPoi = array();

        $con = new DB();
        $sql = $con->prepare("SELECT * FROM rutapoi WHERE id_ruta = " . $idRuta);
        $result = $con->executeQuery($sql);

        foreach ($result as $row) {
            $id_ruta = $row['id_ruta'];
            $id_poi = $row['id_poi'];
            $rutaPoi = new RutaPOI($id_ruta, $id_poi);
            array_push($arrayRutaPoi, $rutaPoi);
        }

        return $arrayRutaPoi;
    }

    /**
     * carga un dropdown de pois a raíz del diario seleccionado
     * @param type $idDiario diario seleccionado
     * @return array
     */
    function DropdownPoisDiario($idDiario) {

        $arrayDiarioPoi = array();

        $con = new DB();
        $sql = $con->prepare("SELECT * FROM historial WHERE id_diario = " . $idDiario);
        $result = $con->executeQuery($sql);

        foreach ($result as $row) {
            $id_diario = $row['id_diario'];
            $id_poi = $row['id_poi'];
            $fechaVisitaPoi = $row['fechaVisitaPoi'];
            $estaEnPoi = $row['estaEnPoi'];
            $texto = $row['texto'];
            $foto = $row['foto'];
            $video = $row['video'];
            $diarioPoi = new Historial($id_diario, $id_poi, $fechaVisitaPoi, $estaEnPoi, $texto, $foto, $video);
            array_push($arrayDiarioPoi, $diarioPoi);
        }

        return $arrayDiarioPoi;
    }

    /**
     * metodo para modificar los datos del usuario
     * @param type $id id del usuario
     * @param type $username nombre del usuario
     * @param type $email correo electronico del usuario
     * @param type $poblacion poblacion del usuario
     * @param type $idioma idioma del usuario
     * @param type $telefono telefono del usuario
     * @param type $url sitio web del usuario
     * @param type $foto foto de perfil del usuario
     * @param type $textoPresentacion texto de presentacion del usuario
     */
    function modificarDatosUsuario($id, $username, $email, $poblacion, $idioma, $telefono, $url, $foto, $textoPresentacion) {
        $sql = "UPDATE usuario SET username='" . $username . "',email='" . $email . "',poblacion='" . $poblacion . "',"
                . "idioma='" . $idioma . "',telefono='" . $telefono . "',url='" . $url . "',foto='" . $foto . "',"
                . "textoPresentacion='" . $textoPresentacion . "' WHERE id='" . $id . "'";
        $con = new DB();
        $result = $con->exec($sql);
        $con = null;
    }

    /**
     * metodo para modificar el historial de visitas
     * @param type $id_diario id del diario
     * @param type $id_poi id del poi
     * @param type $fechaVisitaPoi fecha de visita del poi
     * @param type $estaEnPoi checkbox que marca si ha estado en ese poi
     * @param type $texto texto del historial
     * @param type $foto foto del historial
     * @param type $video video del historial
     */
    function modificarHistorial($id_diario, $id_poi, $fechaVisitaPoi, $estaEnPoi, $texto, $foto, $video) {
        $sql = "UPDATE historial SET fechaVisitaPoi='" . $fechaVisitaPoi . "',estaEnPoi='" . $estaEnPoi . "',texto='" . $texto . "',"
                . "foto='" . $foto . "',video='" . $video . "' WHERE id_diario='" . $id_diario . "' AND id_poi='" . $id_poi . "'";
        $con = new DB();
        $result = $con->exec($sql);
        $con = null;
    }

    /**
     * metodo para modificar el anuncio
     * @param type $titulo titulo del anuncio
     * @param type $descripcion descripcion del anuncio
     * @param type $imagen imagen del anuncio
     * @param type $id_poi id del poi del anuncio
     * @param type $id_usuario id del usuario del anuncio
     */
    function modificarAnuncio($titulo, $descripcion, $imagen, $id_poi, $id_usuario) {
        $sql = "UPDATE anuncio SET titulo='" . $titulo . "',descripcion='" . $descripcion . "',imagen='" . $imagen
                . "' WHERE id_usuario='" . $id_usuario . "' AND id_poi='" . $id_poi . "'";
        $con = new DB();
        $result = $con->exec($sql);
        $con = null;
    }
/**
 * metodo para modificar los puntos de interes
 * @param type $id_poi id del poi
 * @param type $nombre nombre del poi
 * @param type $foto foto del poi
 * @param type $descripcion descripcion del poi
 * @param type $url sitio web del poi
 * @param type $precio precio del poi
 * @param type $horario horario del poi
 */
    function modificarPoi($id_poi, $nombre, $foto, $descripcion, $url, $precio, $horario) {
        $sql = "UPDATE poi SET nombre='" . $nombre . "',foto='" . $foto . "',descripcion='" .
                $descripcion . "',url='" . $url . "',precio='" . $precio . "',horario='" . $horario . "' WHERE id='" . $id_poi . "'";
        $con = new DB();
        $result = $con->exec($sql);
        $con = null;
    }
/**
 * metodo para eliminar un poi
 * @param type $id id del poi a eliminar
 */
    function eliminarPoi($id) {
        $sql = "DELETE FROM poi WHERE id='" . $id . "'";
        $con = new DB();
        $result = $con->exec($sql);
        $con = null;
    }
/**
 * metodo para eliminar usuarios
 * @param type $id id del usuario a eliminar
 */
    function eliminarUser($id) {
        $sql = "DELETE FROM usuario WHERE id='" . $id . "'";
        $con = new DB();
        $result = $con->exec($sql);
        $con = null;
    }
/**
 * metodo para eliminar ruta
 * @param type $id id de la ruta a eliminar
 */
    function eliminarRuta($id) {
        $sql = "DELETE FROM ruta WHERE id='" . $id . "'";
        $con = new DB();
        $result = $con->exec($sql);
        $con = null;
    }
/**
 * metodo para eliminar un diario de usuario
 * @param type $id id del diario de usuario
 */
    function eliminarDiaryUser($id) {
        $sql = "DELETE FROM diario WHERE id='" . $id . "'";
        $con = new DB();
        $result = $con->exec($sql);
        $con = null;
    }

}
