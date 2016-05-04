<?php

//This is the function of autoLoad of all clases
function __autoload($class_name) {
    $root = "C:/xampp/htdocs/finalProyect";
    $curdir = getcwd();
    chdir($root);

    $nomBusiness = "class" . $class_name . ".php";
    $nomDao = "class" . $class_name . ".php";
    $arxiuDAO = "../model/Persistence/" . $nomDao;
    $arxiuBusiness = "../model/Business/" . $nomBusiness;

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
