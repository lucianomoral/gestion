<?php

require_once("dataHandler.php");

class ventaService extends dataHandler
{
    public function getAll($tableName = "")
    {
        $data = parent::getAll('venta');

        $this->close();

        return $data;

    }

    public function create($params)
    {

      $venta = R::dispense('venta');

      $venta->idcliente = $params['idcliente'];
      $venta->fecha = date('y-m-d');
      $venta->entregado = 0;
      $venta->fechaentrega = $params['fechaentrega'];

      $id = R::store($venta);

      return $id;

    }

    public function delete($params)
    {
      try {

        $venta = R::load('venta', $params['id']);

        R::trash($venta);

        return true;

      } catch (Exception $e) {

        return false;

      }


    }

}

?>
