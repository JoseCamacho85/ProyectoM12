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

    public function insertDiarioPoi($idDiario, $idPOI) {
        $diarioPOI = new DiarioPOI($idDiario, $idPOI);

        $con = new DB();
        $nonquery = $con->prepare("INSERT INTO diariopoi (id_diario,id_poi) VALUES (:id_diario,:id_poi)");
        $idDiario = $diarioPOI->getIdDiario();
        $idPOI = $diarioPOI->getIdPOI();

        $nonquery->bindParam(":id_diario", $idDiario);
        $nonquery->bindParam(":id_poi", $idPOI);

        $con->executeNonQuery($nonquery);
    }

}
