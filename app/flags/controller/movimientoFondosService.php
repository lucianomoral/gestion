<?php

require_once("parMovimientoFinancieroService.php");
require_once("parOrigenFinancieroService.php");
require_once("parCajaService.php");

class movimientoFondosService extends dataHandler{

    public function moveFunds($params){

        $cajaDesde = $params["cajaDesde"];
        $cajaHacia = $params["cajaHacia"];
        $monto = $params["valorpendiente"];
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
    public function collect($params){

        parOrigenFinancieroService::changePendingValue($params['id'], $params["valorpendiente"]);
        
        return $this->moveFunds($params);

    }

    //De EFECTIVO a AHORRO
    public function save($params){

        return $this->moveFunds($params);

    }

}

?>