<?php

require_once("dataHandler.php");

class parCajaService extends dataHandler{

    public function getAll($tableName = ''){

        $result = parent::getAll('parcaja');

        $this->close();

        return $result;

    }

    public static function changeBalance($id, $newMovementValue){

        $dataHandler = new dataHandler();

        $caja = R::load('parcaja', $id);

        $caja->saldo = $caja->saldo + $newMovementValue;

        R::store($caja);

    }

    public function create($params){

        /*$origenFinanciero = R::dispense('parorigenfinanciero');

        $origenFinanciero->fecha = $params['fecha'];
        $origenFinanciero->idconcepto = $params['idconcepto'];
        $origenFinanciero->valororiginal = $params['valororiginal'];
        $origenFinanciero->valorpendiente = $params['valorpendiente'];
        $origenFinanciero->idmoneda = $params['idmoneda'];
        $origenFinanciero->idtitular = $params['idtitular'];
        $origenFinanciero->observacion = $params['observacion'];

        $id = R::store($origenFinanciero);

        $this->close();

        return $id;*/

    }

}


?>