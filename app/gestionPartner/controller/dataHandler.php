<?php

require_once("../../../redbean/rb-mysql.php");
require_once("../../../datosConexionLocal.php");

class dataHandler{

    private $datosConexion;

    //Constructor
    public function dataHandler(){

        if(!R::testConnection()){

            $this->datosConexion = new datosConexion();

            R::setup('mysql:host=' . $this->datosConexion->getHost() . ';dbname=' . $this->datosConexion->getDb(), $this->datosConexion->getUser(), $this->datosConexion->getPass());

            R::freeze(TRUE); //Esto es para que no me altere el schema de la base de datos

        }
    }

    //Devuelve todos una tabla completa
    public function getAll($tableName){

        $data = R::findAll($tableName);

        return json_encode($data);

    }

    public function getAllTables(){

        $data = R::getAll("SELECT TABLE_NAME from information_schema.tables WHERE table_schema = 'kiosco' and table_type = 'BASE TABLE' and TABLE_NAME like 'par%'");

        $this->close();

        return json_encode($data);

    }

    public function close(){

        R::close();

    }

}

?>