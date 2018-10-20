<?php

require_once("dataHandler.php");

class parConceptoService extends dataHandler{

    public function getAll($tableName = ''){

        $result = parent::getAll('parconcepto');

        $this->close();

        return $result;

    }

    public function getAllDetailed(){

        $result = json_encode(R::getAll("SELECT * FROM parconceptodetalle"));

        $this->close();

        return $result;

    }

    public static function shouldBePositiveValue($id){

        $dataHandler = new dataHandler();

        $concepto = R::load('parconcepto', $id);

        return $concepto->idtipoconcepto == 1 ? true : false;

    }

}

?>