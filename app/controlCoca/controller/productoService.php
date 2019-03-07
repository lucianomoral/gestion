<?php

require_once("dataHandler.php");

class productoService extends dataHandler {

  public function getAll($tableName = "")
  {

    $data = parent::getAll("producto");

    $this->close();

    return $data;

  }

  public function create($params)
  {

    $producto = R::dispense('producto');

    $producto->nombre = $params['nombre'];
    $producto->idfamilia = $params['idfamilia'];
    $producto->stock = 0;
    $producto->rutafoto = $params['rutafoto'];

    $id = R::store($producto);

    return $id;

  }

}

?>
