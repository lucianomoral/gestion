<?php

require_once("dataHandler.php");
require_once("parOrigenFinancieroService.php");
require_once("parMovimientoFinancieroService.php");
require_once("parEntregaService.php");

class novedadService extends dataHandler{

    public function getAll($tableName = ''){

        return parent::getAll('parorigenfinanciero');

    }

    public function getAllDetailed(){

        return json_encode(R::getAll("SELECT * FROM parorigenfinancierodetalle ORDER BY fecha desc LIMIT 0,10"));

    }

    public function create($params){

        /*R::begin();

        try{*/

            if (parConceptoService::shouldBePositiveValue($params["idconcepto"])){

                $params["valororiginal"] = abs($params["valororiginal"]);

            } else {

                $params["valororiginal"] = -abs($params["valororiginal"]);

            }

            $origenFinanciero = new parOrigenFinancieroService();

            $idOrigenFinanciero = $origenFinanciero->create($params);

            if ($idOrigenFinanciero){

                $params["esentrega"] = $params["esentrega"] == "true" ? true : false;

                if($params["esentrega"]){

                    $entrega = new parEntregaService();

                    $params["id"] = $idOrigenFinanciero;

                    $idEntrega = $entrega->create($params);

                    if($idEntrega){
                    
                        //R::commit();

                        return $idEntrega;

                    }

                } else {

                    return $idOrigenFinanciero;
    
                }
            
            } 

        /*} catch(Exception $e) {

            echo $e->GetMessage();

            R::rollback();

        }*/
    }

}