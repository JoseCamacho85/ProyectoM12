<?php

/**
 * metodo para leer e incluid todas las clases
 * @param type $class_name nombre de la clase
 */
function __autoload($class_name) {
    $root = "C:/xampp/htdocs/ProyectoM12";
    $curdir = getcwd();
    chdir($root);

    $nomBusiness = "class" . $class_name . ".php";
    $nomDao = "class" . $class_name . ".php";
    $arxiuDAO = "model/DAO/" . $nomDao;
    $arxiuBusiness = "model/Business/" . $nomBusiness;

    if (file_exists($arxiuDAO)) {
        require_once $arxiuDAO;
    } else {
        if (file_exists($arxiuBusiness)) {
            require_once $arxiuBusiness;
        }
    }
    chdir($curdir);
}

?>
