<?php

require_once("dataHandler.php");

class productoService extends dataHandler {

  public function getAll($tableName = "")
  {

    $data = parent::getAll("producto");

    $this->close();

    return $data;

  }

}

?>
