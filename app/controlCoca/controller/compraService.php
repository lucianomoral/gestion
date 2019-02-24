<?php

require_once("dataHandler.php");

class compraService extends dataHandler {

  public function getAll($tableName = "")
  {

    $data = parent::getAll("compra");

    $this->close();

    return $data;

  }

  public function create($params)
  {
    $compra = R::dispense('compra');

    $compra->idproveedor = 0;
    $compra->fecha = date('y-m-d');

    $id = R::store($compra);

    $this->close();

    return $id;

  }

}

?>
