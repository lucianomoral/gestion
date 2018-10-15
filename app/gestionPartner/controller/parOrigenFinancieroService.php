<?php

require_once("dataHandler.php");

class parOrigenFinancieroService extends dataHandler{

    public function getAll($tableName = ''){

        return parent::getAll('parorigenfinanciero');

    }

    public function getAllDetailed(){

        return json_encode(R::getAll("SELECT * FROM parorigenfinancierodetalle ORDER BY fecha desc LIMIT 0,10"));

    }

    public function create($params){

        $origenFinanciero = R::dispense('parorigenfinanciero');

        $origenFinanciero->fecha = $params['fecha'];
        $origenFinanciero->idconcepto = $params['idconcepto'];
        $origenFinanciero->valororiginal = $params['valororiginal'];
        $origenFinanciero->valorpendiente = $params['valorpendiente'];
        $origenFinanciero->idmoneda = $params['idmoneda'];
        $origenFinanciero->idtitular = $params['idtitular'];
        $origenFinanciero->observacion = $params['observacion'];

        $id = R::store($origenFinanciero);

        return $id;

    }

}

/*$OFS = new parOrigenFinancieroService();

echo $OFS->getAllDetailed();*/

?>