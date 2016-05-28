<?php

include_once("model/functionAutoload.php");

class Bitacle {

    private $id = null;
    private $nom;
    private $users = null;
    private $pois = null;
    private $rutas = null;
    private $diarios = null;
    private $anuncios = null;
    private $ciudades = null;
    private $tipos = null;
    private $transportes = null;
    private $entornos = null;
    private $paises = null;
    private $historial = null;
    private $MP = null;
    private $rutapoi = null;
/**
 * constructor de la clase bitacle
 * @param type $nom nombre del objeto de la clase bitacle
 */
    function __construct($nom) {
        @$this->id = $id;
        $this->nom = $nom;
        $this->users = array();
        $this->pois = array();
        $this->rutas = array();
        $this->diarios = array();
        $this->anuncios = array();
        $this->ciudades = array();
        $this->tipos = array();
        $this->transportes = array();
        $this->entornos = array();
        $this->paises = array();
        $this->historial = array();
        $this->MP = array();
        $this->rutapoi = array();
    }

    /**
     * metodo get de la clase bitacle
     * @return type
     */
    function getId() {
        return $this->id;
    }

    /**
     * metodo get del nombre de la clase bitacle
     * @return type
     */
    function getNom() {
        return $this->nom;
    }

    /**
     * metodo set de la id de la clase bitacle
     * @param type $id id de la clase bitacle
     */
    function setId($id) {
        $this->id = $id;
    }

    /**
     * metodo set del nombre de la clase bitacle
     * @param type $nom nombre de la clase bitacle
     */
    function setNom($nom) {
        $this->nom = $nom;
    }

    /**
     * metodo get de la coleccion de usuarios de la clase bitacle 
     * @return type
     */
    public function getUsers() {
        return $this->users;
    }

    /**
     * metodo set de la coleccion de usuarios de la clase bitacle
     * @param type $users array de usuarios
     */
    public function setUsers($users) {
        $this->users = $users;
    }

    /**
     * metodo get del array de puntos de interes de la clase bitacle
     * @return type
     */
    public function getPois() {
        return $this->pois;
    }

    /**
     * metodo set del array de puntos de interes de la clase bitacle
     * @param type $pois array de puntos de interes
     */
    public function setPois($pois) {
        $this->pois = $pois;
    }

    /**
     * metodo get del array de rutas de la clase bitacle
     * @return type
     */
    public function getRutas() {
        return $this->rutas;
    }

    /**
     * metodo set del array de rutas de la clase bitacle
     * @param type $rutas array de rutas
     */
    public function setRutas($rutas) {
        $this->rutas = $rutas;
    }

    /**
     * metodo get del array de diarios de la clase bitacle
     * @return type
     */
    public function getDiarios() {
        return $this->diarios;
    }

    /**
     * metodo set del array de diarios de la clase bitacle
     * @param type $diarios array de diarios
     */
    public function setDiarios($diarios) {
        $this->diarios = $diarios;
    }

    /**
     * metodo set del array de ciudades de la clase bitacle
     * @param type $ciudades array de ciudades
     */
    public function setCiudades($ciudades) {
        $this->ciudades = $ciudades;
    }

    /**
     * metodo get del array de ciudades de la clase bitacle
     * @return type 
     */
    public function getCiudades() {
        return $this->ciudades;
    }

    /**
     * metodo get del array de anuncios de la clase bitacle
     * @return type
     */
    function getAnuncios() {
        return $this->anuncios;
    }

    /**
     * metodo get del array de tipos de la clase bitacle
     * @return type
     */
    function getTipos() {
        return $this->tipos;
    }

    /**
     * metodo get del array de transportes de la clase bitacle
     * @return type
     */
    function getTransportes() {
        return $this->transportes;
    }

    /**
     * metodo get del array de entornos de la clase bitacle
     * @return type
     */
    function getEntornos() {
        return $this->entornos;
    }

    /**
     * metodo get del array de paises de la clase bitacle
     * @return type
     */
    function getPaises() {
        return $this->paises;
    }

    /**
     * metodo set del array de anuncios de la clase bitacle
     * @param type $anuncios array de anuncios
     */
    function setAnuncios($anuncios) {
        $this->anuncios = $anuncios;
    }

    /**
     * metodo set del array de tipos de la clase bitacle
     * @param type $tipos array de tipos
     */
    function setTipos($tipos) {
        $this->tipos = $tipos;
    }

    /**
     * metodo set del array de transportes de la clase bitacle
     * @param type $transportes array de transportes
     */
    function setTransportes($transportes) {
        $this->transportes = $transportes;
    }

    /**
     * metodo set del array de entornos de la clase bitacle
     * @param type $entornos array de entornos
     */
    function setEntornos($entornos) {
        $this->entornos = $entornos;
    }

    /**
     * metodo set del array de paises de la clase bitacle
     * @param type $paises array de paises
     */
    function setPaises($paises) {
        $this->paises = $paises;
    }

    /**
     * metodo get del array de historial de la clase bitacle
     * @return type
     */
    function getHistorial() {
        return $this->historial;
    }

    /**
     * metodo set del array de historial de la clase bitacle
     * @param type $historial array de historial
     */
    function setHistorial($historial) {
        $this->historial = $historial;
    }

    /**
     * metodo get del array de mensajes privados de la clase bitacle
     * @return type
     */
    function getMP() {
        return $this->MP;
    }

    /**
     * metodo set del array de mensajes privados de la clase bitacle
     * @param type $MP array de mensajes privados
     */
    function setMP($MP) {
        $this->MP = $MP;
    }

    /**
     * metodo get de la relacion entre rutas y pois
     * @return type
     */
    function getRutapoi() {
        return $this->rutapoi;
    }

    /**
     * metodo set de la relacion entre rutas y pois
     * @param type $rutapoi relacion entre ruta y poi
     */
    function setRutapoi($rutapoi) {
        $this->rutapoi = $rutapoi;
    }

    /**
     * metodo para insertar un usuario a la base de datos
     * @param type $id id del usuario
     * @param type $username nick del usuario
     * @param type $password contraseña de acceso del usuario
     * @param type $email email del usuario
     * @param type $poblacion poblacion del usuario
     * @param type $idioma idioma del usuario
     * @param type $telefono telefono del usuario
     * @param type $url direccion web del usuario
     * @param type $foto foto de perfil del usuario
     * @param type $textoPresentacion texto de presentacion del usuario
     * @param type $administrador booleano true en caso de que el usuario sea administrador
     * @param type $registrado booleano que siempre será true ya que el usuario siempre será registrado
     * @param type $professional booleano true en caso de que el usuario sea profesional
     * @return \Usuario
     */
    public function insertUser($id, $username, $password, $email, $poblacion, $idioma, $telefono, $url, $foto, $textoPresentacion, $administrador, $registrado, $professional) {
        $user = new Usuario($id, $username, $password, $email, $poblacion, $idioma, $telefono, $url, $foto, $textoPresentacion, $administrador, $registrado, $professional);
        $id = $user->persist();
        $user->setId($id);
        array_push($this->users, $user);
        return $user;
    }

    /**
     * metodo para insertar punto de interes dentro de la base de datos
     * @param type $id id del poi
     * @param type $nombre nombre del poi
     * @param type $foto foto del poi
     * @param type $descripcion descripcion del poi
     * @param type $url url del poi
     * @param type $precio precio del poi
     * @param type $horario horario del poi
     * @param type $id_tipo tipo de poi
     * @param type $id_transporte transporte por el que se puede acceder al poi
     * @param type $id_entorno entorno en el que se encuentra el poi
     * @param type $id_ciudad ciudad en la que se encuentra el poi
     * @param type $id_pais pais en el que se encuentra el poi
     * @param type $id_usuario usuario que ha insertado el poi
     * @return \Poi
     */
    public function insertPoi($id, $nombre, $foto, $descripcion, $url, $precio, $horario, $id_tipo, $id_transporte, $id_entorno, $id_ciudad, $id_pais, $id_usuario) {
        $poi = new Poi($id, $nombre, $foto, $descripcion, $url, $precio, $horario, $id_tipo, $id_transporte, $id_entorno, $id_ciudad, $id_pais, $id_usuario);
        $id = $poi->persist();
        $poi->setId($id);
        array_push($this->pois, $poi);
        return $poi;
    }

    /**
     * metodo para añadir una ruta a la base de datos
     * @param type $id id de la ruta
     * @param type $nombre nombre de la ruta
     * @param type $descripcion descripcion de la ruta
     * @param type $id_usuario usuario que ha insertado la ruta
     * @return \Ruta
     */
    public function insertRuta($id, $nombre, $descripcion, $id_usuario) {
        $ruta = new Ruta($id, $nombre, $descripcion, $id_usuario);
        $id = $ruta->persist();
        $ruta->setId($id);
        array_push($this->rutas, $ruta);
        return $ruta;
    }

    /**
     * metodo para insertar un poi dentro de una ruta
     * @param type $idPOI poi a insertar dentro de la ruta
     * @param type $idRuta ruta en la que se inserta el poi
     */
    public function insertRutaPoi($idPOI, $idRuta) {
        $bitacleDB = new RutaPOIDB();
        $bitacleDB->insertRutaPoi($idPOI, $idRuta);
    }

    /**
     * metodo para insertar un diario en la base de datos
     * @param type $id id del diario
     * @param type $nombre nombre del diario
     * @param type $descripcion descripcion del diario
     * @param type $id_usuario usuario propietario del diario
     * @return \Diario
     */
    public function insertDiario($id, $nombre, $descripcion, $id_usuario) {
        $diario = new Diario($id, $nombre, $descripcion, $id_usuario);
        $id = $diario->persist();
        $diario->setId($id);
        array_push($this->diarios, $diario);
        return $diario;
    }

    /**
     * inserta un anuncio en un poi (solo usuarios profesionales y administradores)
     * @param type $id id del anuncio
     * @param type $titulo titulo del anuncio
     * @param type $descripcion descripcion del anuncio
     * @param type $imagen imagen del anuncio
     * @param type $id_poi id del poi a quien se dedica el anuncio
     * @param type $id_usuario usuario que escribe el anuncio
     * @return \Anuncio
     */
    public function insertAnuncio($id, $titulo, $descripcion, $imagen, $id_poi, $id_usuario) {
        $anuncio = new Anuncio($id, $titulo, $descripcion, $imagen, $id_poi, $id_usuario);
        $id = $anuncio->persist();
        $anuncio->setId($id);
        array_push($this->anuncios, $anuncio);
        return $anuncio;
    }

    /**
     * insertar un tipo de poi (solo usuario administrador)
     * @param type $id id del tipo 
     * @param Tipo $tipo nombre del tipo
     * @return \Tipo
     */
    public function insertTipo($id, $tipo) {
        $tipo = new Tipo($id, $tipo);
        $id = $tipo->persist();
        $tipo->setId($id);
        array_push($this->tipos, $tipo);
        return $tipo;
    }

    /**
     * insertar un transporte de poi (solo usuario administrador)
     * @param type $id id del transporte
     * @param Transporte $transporte nombre del transporte
     * @return \Transporte
     */
    public function insertTransporte($id, $transporte) {
        $transporte = new Transporte($id, $transporte);
        $id = $transporte->persist();
        $transporte->setId($id);
        array_push($this->transportes, $transporte);
        return $transporte;
    }

    /**
     * insertar un entorno de un poi (solo usuario administrador)
     * @param type $id id del entorno
     * @param Entorno $entorno nombre del entorno
     * @return \Entorno
     */
    public function insertEntorno($id, $entorno) {
        $entorno = new Entorno($id, $entorno);
        $id = $entorno->persist();
        $entorno->setId($id);
        array_push($this->entornos, $entorno);
        return $entorno;
    }

    /**
     * insertar mp a la base de datos
     * @param type $id id del mensaje
     * @param type $titulo titulo del mensaje
     * @param type $message contenido del mensaje
     * @param type $usuarioReceptor usuario receptor
     * @param type $id_usuario usuario remitente
     * @return \MensajePrivado
     */
    public function insertMP($id, $titulo, $message, $usuarioReceptor, $id_usuario) {
        $MP = new MensajePrivado($id, $titulo, $message, $usuarioReceptor, $id_usuario);
        $id = $MP->persist();
        $MP->setId($id);
        array_push($this->MP, $MP);
        return $MP;
    }

    /**
     * valida que el usuario logeado es correcto
     * @param type $user nombre de usuario
     * @param type $password contraseña de usuario
     * @return type
     */
    public function validateUser($user, $password) {
        $bitacleDB = new BitacleDB();
        $validate = $bitacleDB->fetchValidateUser($user, $password);
        return $validate;
    }

    /**
     * metodo para poblar los tipos de poi
     */
    public function populateTipos() {
        $bitacleDB = new BitacleDB();
        $arrayTipos = $bitacleDB->fetchTipo();
        for ($i = 0; $i < count($arrayTipos); $i++) {
            array_push($this->tipos, $arrayTipos[$i]);
        }
    }

    /**
     * metodo para poblar los transporte de poi
     */
    public function populateTransportes() {
        $bitacleDB = new BitacleDB();
        $arrayTransportes = $bitacleDB->fetchTransporte();
        for ($i = 0; $i < count($arrayTransportes); $i++) {
            array_push($this->transportes, $arrayTransportes[$i]);
        }
    }

    /**
     * metodo para poblar los entornos de poi
     */
    public function populateEntornos() {
        $bitacleDB = new BitacleDB();
        $arrayEntornos = $bitacleDB->fetchEntorno();
        for ($i = 0; $i < count($arrayEntornos); $i++) {
            array_push($this->entornos, $arrayEntornos[$i]);
        }
    }

    /**
     * metodo para poblar las ciudades de poi
     */
    public function populateCiudades() {
        $bitacleDB = new BitacleDB();
        $arrayCiudades = $bitacleDB->fetchCiudad();
        for ($i = 0; $i < count($arrayCiudades); $i++) {
            array_push($this->ciudades, $arrayCiudades[$i]);
        }
    }

    /**
     * metodo para poblar los paises de poi
     */
    public function populatePaises() {
        $bitacleDB = new BitacleDB();
        $arrayPaises = $bitacleDB->fetchPais();
        for ($i = 0; $i < count($arrayPaises); $i++) {
            array_push($this->paises, $arrayPaises[$i]);
        }
    }

    /**
     * metodo para poblar los poi
     */
    public function populatePois() {
        $bitacleDB = new BitacleDB();
        $arrayPois = $bitacleDB->fetchPoi();
        for ($i = 0; $i < count($arrayPois); $i++) {
            array_push($this->pois, $arrayPois[$i]);
        }
    }

    /**
     * metodo para poblar los usuarios
     */
    public function populateUsuarios() {
        $bitacleDB = new BitacleDB();
        $arrayUsuarios = $bitacleDB->fetchUsuario();
        for ($i = 0; $i < count($arrayUsuarios); $i++) {
            array_push($this->users, $arrayUsuarios[$i]);
        }
    }

    /**
     * metodo para poblar las rutas
     */
    public function populateRutas() {
        $bitacleDB = new BitacleDB();
        $arrayRutas = $bitacleDB->fetchRuta();
        for ($i = 0; $i < count($arrayRutas); $i++) {
            array_push($this->rutas, $arrayRutas[$i]);
        }
    }

    /**
     * metodo para poblar los diarios
     */
    public function populateDiarios() {
        $bitacleDB = new BitacleDB();
        $arrayDiarios = $bitacleDB->fetchDiario();
        for ($i = 0; $i < count($arrayDiarios); $i++) {
            array_push($this->diarios, $arrayDiarios[$i]);
        }
    }

    /**
     * metodo para poblar el historial
     */
    public function populateHistorial() {
        $bitacleDB = new BitacleDB();
        $arrayHistoriales = $bitacleDB->fetchHistorial();
        for ($i = 0; $i < count($arrayHistoriales); $i++) {
            array_push($this->historial, $arrayHistoriales[$i]);
        }
    }

    /**
     * metodo para poblar los anuncios
     */
    public function populateAnuncios() {
        $bitacleDB = new BitacleDB();
        $arrayAnuncios = $bitacleDB->fetchAnuncio();
        for ($i = 0; $i < count($arrayAnuncios); $i++) {
            array_push($this->anuncios, $arrayAnuncios[$i]);
        }
    }

    /**
     * metodo para ver los detalles de los poi
     * @param type $idPOI id del poi a detallar
     * @return type
     */
    public function VerDetallesPOI($idPOI) {

        for ($i = 0; $i < count($this->getPois()); $i++) {
            if ($this->getPois()[$i]->getId() == $idPOI) {
                $detall = $this->getPois()[$i];
            }
        }
        return $detall;
    }

    /**
     * metodo para ver los detalles de una ruta
     * @param type $idRuta id de la ruta a detallar
     * @return type
     */
    public function VerDetallesRuta($idRuta) {

        for ($i = 0; $i < count($this->getRutas()); $i++) {
            if ($this->getRutas()[$i]->getId() == $idRuta) {
                $detall = $this->getRutas()[$i];
            }
        }
        return $detall;
    }

    /**
     * metodo para ver los detalles del usuario
     * @param type $idUsuario id del usuario a detallar
     * @return type
     */
    public function VerDetallesUsuario($idUsuario) {

        for ($i = 0; $i < count($this->getUsers()); $i++) {
            if ($this->getUsers()[$i]->getId() == $idUsuario) {
                $detall = $this->getUsers()[$i];
            }
        }
        return $detall;
    }

    /**
     * metodo para ver los detalles del diario
     * @param type $idDiario id del diario a detallar
     * @return type
     */
    public function VerDetallesDiario($idDiario) {

        for ($i = 0; $i < count($this->getDiarios()); $i++) {
            if ($this->getDiarios()[$i]->getId() == $idDiario) {
                $detall = $this->getDiarios()[$i];
            }
        }
        return $detall;
    }

    /**
     * metodo para ver los mensajes privados
     * @param type $Destinatario destinatario de los mensajes privados
     * @return type
     */
    public function VerMensajesPrivados($Destinatario) {
        $bitacleDB = new BitacleDB();
        $result = $bitacleDB->searchMP($Destinatario);

        return $result;
    }

    /**
     * metodo para crear una query
     * @param type $fields array de campos
     * @param type $fieldNames array de valores
     * @return type
     */
    public function crearQuery($fields, $fieldNames) {
        $bitacleDB = new BitacleDB();
        $arrayCrearQuery = $bitacleDB->crearQueryDB($fields, $fieldNames);
        return $arrayCrearQuery;
    }

    /**
     * metodo para ver los pois insertados en las rutas
     * @param type $idRuta ruta a detallar
     * @return type
     */
    public function VerRutaPoi($idRuta) {
        $bitacleDB = new BitacleDB();
        $arrayRutasPoi = $bitacleDB->DropdownPoisRuta($idRuta);
        return $arrayRutasPoi;
    }

    /**
     * metodo para ver los pois insertados en los diarios
     * @param type $idDiario diario a detallar
     * @return type
     */
    public function VerDiarioPoi($idDiario) {
        $bitacleDB = new BitacleDB();
        $arrayDiariosPoi = $bitacleDB->DropdownPoisDiario($idDiario);
        return $arrayDiariosPoi;
    }

    /**
     * insertar un poi dentro de un diario
     * @param type $idDiario diario sobre el que se va a insertar un poi
     * @param type $idPOI poi que va a ser insertado en un diario
     */
    public function insertDiarioPoi($idDiario, $idPOI) {
        $bitacleDB = new DiarioPoiDB();
        $objecteHistorial = $bitacleDB->insertDiarioPoi($idDiario, $idPOI);
    }

    /**
     * modificar los datos de usuario
     * @param type $id id del usuario
     * @param type $username nombre de usuario
     * @param type $email email del usuario
     * @param type $poblacion poblacion del usuario
     * @param type $idioma idioma del usuario
     * @param type $telefono telefono del usuario
     * @param type $url lugar web del usuario
     * @param type $foto foto de perfil del usuario
     * @param type $textoPresentacion texto de presentacion del usuario
     */
    public function modificarDatosUsuario($id, $username, $email, $poblacion, $idioma, $telefono, $url, $foto, $textoPresentacion) {
        $bitacleDB = new BitacleDB();
        $bitacleDB->modificarDatosUsuario($id, $username, $email, $poblacion, $idioma, $telefono, $url, $foto, $textoPresentacion);
    }

    /**
     * modificar los datos del historial de lugares visitados
     * @param type $id_diario diario sobre el que se quiere modificar
     * @param type $id_poi poi que se quiere modifcar
     * @param type $fechaVisitaPoi fecha de visita del poi
     * @param type $estaEnPoi checkbox que verifica que se ha estado en ese poi
     * @param type $texto texto del diario
     * @param type $foto foto del diario
     * @param type $video video del diario
     */
    public function modificarHistorial($id_diario, $id_poi, $fechaVisitaPoi, $estaEnPoi, $texto, $foto, $video) {
        $bitacleDB = new BitacleDB();
        $bitacleDB->modificarHistorial($id_diario, $id_poi, $fechaVisitaPoi, $estaEnPoi, $texto, $foto, $video);
    }

    /**
     * modificar un anuncio
     * @param type $titulo titulo del anuncio
     * @param type $descripcion descripcion del anuncio
     * @param type $imagen imagen del anuncio
     * @param type $id_poi id del poi sobre el que trata el anuncio
     * @param type $id_usuario usuario que escribe el anuncio
     */
    public function modificarAnuncio($titulo, $descripcion, $imagen, $id_poi, $id_usuario) {
        $bitacleDB = new BitacleDB();
        $bitacleDB->modificarAnuncio($titulo, $descripcion, $imagen, $id_poi, $id_usuario);
    }

    /**
     * modificar punto de interes
     * @param type $id_poi id del poi
     * @param type $nombre nombre del poi
     * @param type $foto foto del poi
     * @param type $descripcion descripcion del poi
     * @param type $url url del poi
     * @param type $precio precio del poi
     * @param type $horario horario del poi
     */
    public function modificarPoi($id_poi, $nombre, $foto, $descripcion, $url, $precio, $horario) {
        $bitacleDB = new BitacleDB();
        $bitacleDB->modificarPoi($id_poi, $nombre, $foto, $descripcion, $url, $precio, $horario);
    }

    /**
     * eliminar punto de interes
     * @param type $id id del poi a eliminar
     */
    public function eliminarPoi($id) {
        $bitacleDB = new BitacleDB();
        $bitacleDB->eliminarPoi($id);
        $arrayAux = [];
        for ($i = 0; $i < count($this->getPois()); $i++) {

            if (($this->getPois()[$i]->getId() != $id)) {
                array_push($arrayAux, $this->getPois()[$i]);
            }
        }
        $this->setPois($arrayAux);
    }

    /**
     * eliminar usuario
     * @param type $id id del usuario a eliminar
     */
    public function eliminarUser($id) {
        $bitacleDB = new BitacleDB();
        $bitacleDB->eliminarUser($id);
        $arrayAux = [];
        for ($i = 0; $i < count($this->getUsers()); $i++) {

            if (($this->getUsers()[$i]->getId() != $id)) {
                array_push($arrayAux, $this->getUsers()[$i]);
            }
        }
        $this->setUsers($arrayAux);
    }

    /**
     * eliminar ruta
     * @param type $id id de la ruta a eliminar
     */
    public function eliminarRuta($id) {
        $bitacleDB = new BitacleDB();
        $bitacleDB->eliminarRuta($id);
        $arrayAux = [];
        for ($i = 0; $i < count($this->getRutas()); $i++) {

            if (($this->getRutas()[$i]->getId() != $id)) {
                array_push($arrayAux, $this->getRutas()[$i]);
            }
        }
        $this->setRutas($arrayAux);
    }

    /**
     * eliminar diario de usuario
     * @param type $id id del diario a eliminar
     */
    public function eliminarDiaryUser($id) {
        $bitacleDB = new BitacleDB();
        $bitacleDB->eliminarDiaryUser($id);
        $arrayAux = [];
        for ($i = 0; $i < count($this->getDiarios()); $i++) {

            if (($this->getDiarios()[$i]->getId() != $id)) {
                array_push($arrayAux, $this->getDiarios()[$i]);
            }
        }
        $this->setDiarios($arrayAux);
    }

}
