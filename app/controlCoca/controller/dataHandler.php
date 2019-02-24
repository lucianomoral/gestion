<?php

require_once("../vendor/redbean/rb-mysql.php");
require_once("../config/datosConexion.php");

class dataHandler
{

  private $datosConexion;

  //Constructor
  public function dataHandler()
  {

    if(!R::testConnection())
    {

      $this->datosConexion = new datosConexion();

      R::setup('mysql:host=' . $this->datosConexion->getServer() . ';dbname=' . $this->datosConexion->getDb(), $this->datosConexion->getUser(), $this->datosConexion->getPass());

      R::freeze(TRUE); //Esto es para que no me altere el schema de la base de datos

    }

  }

  public function getAll($tableName)
  {

    $data; //Acá se carga todo el resultado de la tabla

    $data = R::findAll($tableName);

    $this->close(); //Cierra la conexion

    return json_encode($data);

  }

  public function close()
  {

    R::close();

  }

}

?>
