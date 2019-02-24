<?php

require_once('dataHandler.php');
require_once('ventaService.php');
require_once('movimientoStockService.php');
require_once('productoService.php');
require_once('tipoOperacionEnum.php');

class ventaController extends dataHandler
{

  public function createOrder ($params)
  {
    try{
        $venta = new ventaService();
        $movimientoStock = new movimientoStockService();

        //Primero se genera la transaccion de referencia que es la venta
        $params['idmovimientoreferencia'] = $venta->create($params['venta']);

        //Despues se obtiene el tipo de operacion de la clase enumeradora
        $params['idtipooperacion'] = tipoOperacionEnum::venta();

        //Se recorren los productos y se llenan los movimientos
        foreach ($params['productos'] as $item)
        {
          //Si la cantidad no está vacía ni es 0
          if ($item['cantidad'])
          {

            $params['idproducto'] = $item['id'];
            $params['cantidad'] = -$item['cantidad'];
            $params['stockimpactado'] = 0;
            $params['precioun'] = 0;

            $id = $movimientoStock->create($params);

          }

        }

        $this->close();

        echo json_encode(["response" => 200, "status" => "OK", "msg" => "Pedido registrado correctamente."]);

      } catch (Exception $e) {

        echo json_encode(["response" => 400, "status" => "ER", "msg" => "Error al registrar pedido."]);

      }


  }

}

?>
