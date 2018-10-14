<?php

require_once("dataHandler.php");

class parDireccionService extends dataHandler{

    public function getAll($tableName = ''){

        return parent::getAll('pardireccion');

    }

    public function create($params){

        $direccion = R::dispense('pardireccion');

        $direccion->direccion = $params['direccion'];
        $direccion->barrio = $params['barrio'];
        $direccion->provincia = $params['provincia'];

        $id = R::store($direccion);

        return $id;

    }

}

/*$d = new parDireccionService();

$d->create($params)*/

?>