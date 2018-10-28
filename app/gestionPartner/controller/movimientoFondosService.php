<?php

require_once("parMovimientoFinancieroService.php");
require_once("parOrigenFinancieroService.php");
require_once("parCajaService.php");

class movimientoFondosService extends dataHandler{

    public function moveFunds($params, $accountFrom, $accountTo){

        $cajaDesde = $accountFrom;
        $cajaHacia = $accountTo;
        $monto = abs($params["valorpendiente"]);
        $movimientoFinanciero = new parMovimientoFinancieroService();

        $params['idcaja'] = $cajaDesde;
        $params['valororiginal'] = -$monto;

        $idDesde = $movimientoFinanciero->create($params);
        parCajaService::changeBalance($cajaDesde, -$monto);

        $params['idcaja'] = $cajaHacia;
        $params['valororiginal'] = $monto;

        $idHacia = $movimientoFinanciero->create($params);
        parCajaService::changeBalance($cajaHacia, $monto);

        if($idDesde && $idHacia){

            $this->close();
            
            return json_encode(["status" => 1]);

        } else {

            $this->close();

            return json_encode(["status" => 0]);

        }

    }

    //De PENDIENTE a EFECTIVO
    public function collect($params, $accountFrom = 3, $accountTo = 1){

        parOrigenFinancieroService::changePendingValue($params['id'], -abs($params["valorpendiente"]));
        
        return $this->moveFunds($params, $accountFrom, $accountTo);

    }

    //De EFECTIVO a AHORRO
    public function save($params, $accountFrom = 1, $accountTo = 2){

        return $this->moveFunds($params, $accountFrom, $accountTo);

    }

}

?>