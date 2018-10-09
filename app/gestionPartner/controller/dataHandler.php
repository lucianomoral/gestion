<?php

require_once("../../../redbean/rb-mysql.php");
require_once("../../../datosConexionLocal.php");

class dataHandler{

    private $datosConexion;

    //Constructor
    public function dataHandler(){

        $this->datosConexion = new datosConexion();

        R::setup('mysql:host=' . $this->datosConexion->getHost() . ';dbname=' . $this->datosConexion->getDb(), $this->datosConexion->getUser(), $this->datosConexion->getPass());

        R::freeze(TRUE); //Esto es para que no me altere el schema de la base de datos

    }

    //Devuelve todos una tabla completa
    public function getAll($tableName){

        $data = R::findAll($tableName);

        return json_encode($data);

    }

}

?>