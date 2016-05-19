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

    public function insertDiarioPoi($id_diario, $id_poi) {
        $fechaVisitaPoi = null;
        $estaEnPoi = null;
        $texto = null;
        $foto = null;
        $video = null;
        $diarioPOI = new Historial($id_diario, $id_poi, $fechaVisitaPoi, $estaEnPoi, $texto, $foto, $video);

        $con = new DB();
        $nonquery = $con->prepare("INSERT INTO historial (id_diario,id_poi) VALUES (:id_diario,:id_poi)");
        $id_diario = $diarioPOI->getId_diario();
        $id_poi = $diarioPOI->getId_poi();

        $nonquery->bindParam(":id_diario", $id_diario);
        $nonquery->bindParam(":id_poi", $id_poi);

        $con->executeNonQuery($nonquery);
        return $diarioPOI;
    }

}
