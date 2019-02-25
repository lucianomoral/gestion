<?php

require_once("dataHandler.php");

class movimientoStockService extends dataHandler {

  public function getAll($tableName = "")
  {

    $data = parent::getAll("movimientostock");

    $this->close();

    return $data;

  }

  public function create($params)
  {
    $movimientoStock = R::dispense('movimientostock');

    $movimientoStock->idmovimientoreferencia = $params['idmovimientoreferencia'];
    $movimientoStock->idtipooperacion = $params['idtipooperacion'];
    $movimientoStock->cantidad = $params['cantidad'];
    $movimientoStock->idproducto = $params['idproducto'];
    $movimientoStock->stockimpactado = $params['stockimpactado'];
    $movimientoStock->precioun = $params['precioun'];

    $id = R::store($movimientoStock);

    $this->close();

    return $id;

  }

  public function impactStock($id)
  {
      //Obtengo el movimiento
      $movimientoStock = R::load('movimientostock', $id);

      //Si todavía no fue impactado
      if ($movimientoStock->stockimpactado == 0)
      {
        //Busco el producto del movimiento para actualizar el stock
        $producto = R::load('producto', $movimientoStock->idproducto);

        //Actualizo stock del producto
        $producto->stock = $producto->stock + $movimientoStock->cantidad;

        //Actualizo el movimiento para que ahora figure como impactado
        $movimientoStock->stockimpactado = 1;

        //Guardo los cambios
        R::store($producto);
        R::store($movimientoStock);

        $this->close();

      } else {

        echo "Movimiento ya registrado.";

      }

  }

  public function update($params)
  {

    $movimientoStock = R::load('movimientostock', $params['id']);

    $movimientoStock->cantidad = -$params['cantidad'];
    $movimientoStock->stockimpactado = 0;

    $response = R::store($movimientoStock);

    $this->close();

    return $response;
  }

}

?>
