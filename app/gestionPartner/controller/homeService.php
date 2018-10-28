<?php

require_once("dataHandler.php");

class homeService extends dataHandler{

    public function getNovedadesPorMes(){

        return json_encode(R::getAll("SELECT * FROM novedadespormes"));

    }

}

?>