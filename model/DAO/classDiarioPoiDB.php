<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of classDiarioPoiDB
 *
 * @author jose
 */
class DiarioPoiDB {

    public function insertDiarioPoi($idPOI, $idDiario) {
        $diarioPOI = new RutaPOI($idPOI, $idDiario);

        $con = new DB();
        $nonquery = $con->prepare("INSERT INTO diariopoi (id_diario,id_poi) VALUES (:id_diario,:id_poi)");
        $idPOI = $diarioPOI->getIdPOI();
        $idDiario = $diarioPOI->getIdDiario();

        $nonquery->bindParam(":id_diario", $idDiario);
        $nonquery->bindParam(":id_poi", $idPOI);

        $con->executeNonQuery($nonquery);

    }

}
