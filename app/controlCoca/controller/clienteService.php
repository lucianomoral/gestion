<?php

require_once('dataHandler.php');

class clienteService extends dataHandler
{

  public function getAll($tableName = '')
  {
    $data = parent::getAll('cliente');

    $this->close();

    return $data;
  }

  public function create($params)
  {
    $cliente = R::dispense('cliente');

    $cliente->nombre = $params['nombre'];
    $cliente->direccion = $params['direccion'];

    $id = R::store($cliente);

    $this->close();

    return $id;

  }

}

?>
