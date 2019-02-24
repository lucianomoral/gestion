<?php

require_once("dataHandler.php");

class FamiliaArticuloService extends dataHandler{

    public function getAll($tableName = ''){

        $result = parent::getAll('FamiliaArticulo');

        $this->close();

        return $result;

    }

    public function create($params){

        $familiaArticulo = R::dispense('FamiliaArticulo');

        $familiaArticulo->nombre = $params['nombre'];

        $id = R::store($familiaArticulo);

        $this->close();

        return $id;

    }

}


?>