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

}

?>
