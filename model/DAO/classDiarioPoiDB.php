<?php

class DiarioPoiDB {

    /**
     * clase para insertar un poi dentro de un diario
     * @param type $id_diario id del diario donde se insertara el poi
     * @param type $id_poi poi que se insertara en el diario
     * @return \Historial
     */
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
