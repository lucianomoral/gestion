<?php

require_once('dataHandler.php');
require_once('ventaService.php');
require_once('movimientoStockService.php');
require_once('productoService.php');
require_once('tipoOperacionEnum.php');

class ventaController extends dataHandler
{

  public function getAllPedidos()
  {
    $data = R::getAll("SELECT * FROM pedido ORDER BY fechaentrega");

    $this->close();

    return json_encode($data);

  }

  public function getAllPedidosDetalle()
  {
    $data = R::getAll("SELECT * FROM pedidodetalle ORDER BY idmovimientoreferencia");

    $this->close();

    return json_encode($data);

  }

  public function deliverPedido($params)
  {
    try{

      $i = 0;
      $movimientoStock = new movimientoStockService();

      $lineasPedido = R::find('movimientostock', 'idmovimientoreferencia = :idmovimientoreferencia AND idtipooperacion = :idtipooperacion', [':idmovimientoreferencia' => $params['id'], ':idtipooperacion' => tipoOperacionEnum::venta()]);

      foreach ($lineasPedido as $lineaPedido)
      {
        $movimientoStock->impactStock($lineaPedido['id']);
        $i = $i + 1;
      }

      if  (count($lineasPedido) == $i)
      {
        $venta = R::load('venta', $params['id']);
        $venta->entregado = 1;
        R::store($venta);
      }

      return json_encode(["response" => 200, "status" => "OK", "msg" => "Pedido entregado correctamente."]);

    } catch (Exception $e){

      return json_encode(["response" => 400, "status" => "ER", "msg" => "Error al entregar el pedido."]);

    }
  }

  public function getOrderAndDetailById($id)
  {
    $pedido = R::load('pedido', $id);
    $pedidoDetalle = R::find('pedidodetalle', 'idmovimientoreferencia = :idmovimientoreferencia AND idtipooperacion = :idtipooperacion', ['idmovimientoreferencia' => $id, 'idtipooperacion' => tipoOperacionEnum::venta()]);

    return json_encode(['pedido' => $pedido, 'pedidoDetalle' => $pedidoDetalle]);

  }

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

        $data = $this->getOrderAndDetailById($params['idmovimientoreferencia']);

        $this->close();

        return json_encode(["response" => 200, "status" => "OK", "msg" => "Pedido registrado correctamente.", "data" => $data]);

      } catch (Exception $e) {

        return json_encode(["response" => 400, "status" => "ER", "msg" => "Error al registrar pedido."]);

      }


  }

  public function deleteLineaPedido($params)
  {
    $movimientoStock = new movimientoStockService();

    $deleteOk = $movimientoStock->delete($params);

    if (!$deleteOk)
    {
      return json_encode(["response" => 400, "status" => "ER", "msg" => "Error al eliminar la linea."]);
    }

    if (empty(R::find('movimientostock', 'idmovimientoreferencia = :idmovimientoreferencia AND stockimpactado != 1', [':idmovimientoreferencia' => $params['idmovimientoreferencia']])))
    {
      $venta = new ventaService();

      $venta->delete(['id' => $params['idmovimientoreferencia']]);

      return json_encode(["response" => 200, "status" => "OK", "msg" => "Linea y pedido eliminado.", "action" => 'deletePedido']);

    } else {

      return json_encode(["response" => 200, "status" => "OK", "msg" => "Linea eliminada.", "action" => '']);

    }

  }

}

?>
