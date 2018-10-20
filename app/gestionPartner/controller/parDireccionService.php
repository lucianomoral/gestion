<?php

require_once("dataHandler.php");

class parDireccionService extends dataHandler{

    public function getAll($tableName = ''){

        $result = parent::getAll('pardireccion');

        $this->close();
        
        return $result;

    }

    public function create($params){

        $direccion = R::dispense('pardireccion');

        $direccion->direccion = $params['direccion'];
        $direccion->barrio = $params['barrio'];
        $direccion->provincia = $params['provincia'];

        $id = R::store($direccion);

        $this->close();

        return $id;

    }

}

/*$d = new parDireccionService();

$d->create($params)*/

?>