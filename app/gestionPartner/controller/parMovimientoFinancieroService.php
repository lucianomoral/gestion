<?php

require_once("dataHandler.php");

class parMovimientoFinancieroService extends dataHandler{

    public function getAll($tableName = ''){

        $result = parent::getAll('parmovimientofinanciero');

        $this->close();

        return $result;

    }

    public function getPending(){

        $result = json_encode(R::getAll("SELECT * FROM parorigenfinancierodetalle WHERE valorpendiente > 0 ORDER BY fecha"));

        $this->close();

        return $result;

    }

    public function create($params){

        $movimientoFinanciero = R::dispense('parmovimientofinanciero');

        $movimientoFinanciero->fecha = $params['fecha'];
        $movimientoFinanciero->monto = $params['valororiginal'];
        $movimientoFinanciero->idmoneda = $params['idmoneda'];
        $movimientoFinanciero->idcaja = $params['idcaja'];
        $movimientoFinanciero->idorigenfinanciero = $params['id'];
        $movimientoFinanciero->observacion = $params['observacion'];

        $id = R::store($movimientoFinanciero);

        $this->close();

        return $id;

    }

}

?>