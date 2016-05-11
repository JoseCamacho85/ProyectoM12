<?php

include("validatePOIfields.php");


$fields = array($_POST["typePOI"], $_POST["transportPOI"], $_POST["entornPOI"],
    $_POST["cityPOI"], $_POST["countryPOI"]);

if (validatePOIfields($fields)) {
    $fields = array($_POST["typePOI"],
        $_POST["transportPOI"],
        $_POST["entornPOI"],
        $_POST["cityPOI"],
        $_POST["countryPOI"]);

    $fieldNames = array("id_tipo",
        "id_transporte",
        "id_entorno",
        "id_ciudad",
        "id_pais");

    //$query = "SELECT * FROM POI";
    $query = "WHERE ";

    $arr = array();

    for ($i = 0; $i < count($fields); $i++) {
        if ($fields[$i] != null) {
            $arr[$i] .= $fields[$i];
        }
    }

    //print_r($arr);

    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] != null) {
            //echo count($arr);
            if ($i == count($arr) - 1) {
                $query .= $fieldNames[$i] . "=" . $fields[$i] . "  ";
            } else {
                $query .= $fieldNames[$i] . "=" . $fields[$i] . " and ";
            }
        }
    }
    echo $query;
} else {
    echo "¡no hay campos!";
    //header("location:../view/searchPOI.php");
}
?>