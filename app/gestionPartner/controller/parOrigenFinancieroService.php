<?php

require_once("dataHandler.php");

class parOrigenFinancieroService extends dataHandler{

    public function getAll($tableName = ''){

        $result = parent::getAll('parorigenfinanciero');

        $this->close();

        return $result;

    }

    public function getAllDetailed(){

        $result = json_encode(R::getAll("SELECT * FROM parorigenfinancierodetalle ORDER BY fecha desc LIMIT 0,10"));

        $this->close();

        return $result;

    }

    public function getByIdDetailed($params){

        $result = json_encode(R::getAll("SELECT * FROM parorigenfinancierodetalle WHERE id = :id ORDER BY fecha desc LIMIT 0,10", [":id" => $params['id']] ));

        $this->close();

        return $result;

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

        $this->close();

        return $id;

    }

    public static function changePendingValue($id, $newMovementValue){

        $dataHandler = new dataHandler();

        $origenFinanciero = R::load('parorigenfinanciero', $id);

        $origenFinanciero->valorpendiente = $origenFinanciero->valorpendiente + $newMovementValue;

        R::store($origenFinanciero);

    }

}

/*$OFS = new parOrigenFinancieroService();

echo $OFS->getByIdDetailed(30);*/

?>