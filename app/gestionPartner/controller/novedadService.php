<?php

require_once("dataHandler.php");
require_once("parOrigenFinancieroService.php");
require_once("parMovimientoFinancieroService.php");
require_once("parCajaService.php");
require_once("parEntregaService.php");

class novedadService extends dataHandler{

    public function getAll($tableName = ''){

        return parent::getAll('parorigenfinanciero');

    }

    public function getAllDetailed(){

        return json_encode(R::getAll("SELECT * FROM parorigenfinancierodetalle ORDER BY fecha desc LIMIT 0,10"));

    }

    public function create($params){

        $origenFinanciero = new parOrigenFinancieroService();
        $movimientoFinanciero = new parMovimientoFinancieroService();

        $params["esentrega"] = $params["esentrega"] == "true" ? true : false;
        $params["cobradoeneldia"] = $params["cobradoeneldia"] == "true" ? true : false;

        /*R::begin();

        try{*/

            if (parConceptoService::shouldBePositiveValue($params["idconcepto"])){

                $params["valororiginal"] = abs($params["valororiginal"]);

            } else {

                $params["valororiginal"] = -abs($params["valororiginal"]);

            }

            $idOrigenFinanciero = $origenFinanciero->create($params);

            if ($idOrigenFinanciero){

                $params["id"] = $idOrigenFinanciero;

                if($params["cobradoeneldia"]){

                    $params["idcaja"] = 1; //EFECTIVO

                } else {

                    $params["idcaja"] = 3; //PENDIENTE

                }

                $idMovimientoFinanciero = $movimientoFinanciero->create($params);

                parCajaService::changeBalance($params['idcaja'], $params['valororiginal']);

                if($params["esentrega"]){

                    $entrega = new parEntregaService();

                    $idEntrega = $entrega->create($params);

                    if($idEntrega){
                    
                        //R::commit();

                        return json_encode(["status" => 1, "idorigenfinanciero" => $idOrigenFinanciero, "identrega" => $idEntrega, "idmovimientofinanciero" => $idMovimientoFinanciero]);

                    }

                } else {

                    return json_encode(["status" => 1, "idorigenfinanciero" => $idOrigenFinanciero,"identrega" => 0,  "idmovimientofinanciero" => $idMovimientoFinanciero]);
    
                }
            
            } else {

                return json_encode(["status" => 0, "idorigenfinanciero" => 0,"identrega" => 0,  "idmovimientofinanciero" => $idMovimientoFinanciero]);

            }

        /*} catch(Exception $e) {

            echo $e->GetMessage();

            R::rollback();

        }*/
    }

}