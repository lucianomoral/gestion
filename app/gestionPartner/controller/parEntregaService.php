<?php

require_once("dataHandler.php");

class parEntregaService extends dataHandler{

    public function getAll($tableName = ''){

        $result = parent::getAll('parentrega');

        $this->close();

        return $result;

    }

    public function getAllDetailed(){

        #Agregar despues una view detallada o algo así
        #return json_encode(R::getAll("SELECT * FROM parorigenfinancierodetalle ORDER BY fecha desc LIMIT 0,10"));
        return true;

    }

    public function create($params){

        $entrega = R::dispense('parentrega');

        $entrega->idorigenfinanciero = $params['id'];
        $entrega->iddireccion = $params['iddireccion'];

        $id = R::store($entrega);

        $this->close();

        return $id;

    }

}