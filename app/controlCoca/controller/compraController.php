<?php

require_once('dataHandler.php');
require_once('compraService.php');
require_once('movimientoStockService.php');
require_once('productoService.php');
require_once('tipoOperacionEnum.php');

class compraController extends dataHandler
{

  public function createPurchase ($params)
  {
    try{
        $compra = new compraService();
        $movimientoStock = new movimientoStockService();

        //Primero se genera la transaccion de referencia que es la compra
        $params['idmovimientoreferencia'] = $compra->create($params);

        //Despues se obtiene el tipo de operacion de la clase enumeradora
        $params['idtipooperacion'] = tipoOperacionEnum::compra();

        //Se recorren los productos y se llenan los movimientos
        foreach ($params['productos'] as $item)
        {
          //Si la cantidad no está vacía ni es 0
          if ($item['cantidad'])
          {

            $params['idproducto'] = $item['id'];
            $params['cantidad'] = $item['cantidad'];
            $params['stockimpactado'] = 0;
            $params['precioun'] = 0;

            $id = $movimientoStock->create($params);

            $movimientoStock->impactStock($id);

          }

        }

        $this->close();

        echo json_encode(["response" => 200, "status" => "OK", "msg" => "Compra registrada correctamente."]);

      } catch (Exception $e) {

        echo json_encode(["response" => 400, "status" => "ER", "msg" => "Error al registrar la compra."]);

      }


  }

}

?>
