<?php

require_once("dataHandler.php");

class parConceptoService extends dataHandler{

    public function getAll($tableName = ''){

        return parent::getAll('parconcepto');

    }

    public function getAllDetailed(){

        return json_encode(R::getAll("SELECT * FROM parconceptodetalle"));

    }

}

?>