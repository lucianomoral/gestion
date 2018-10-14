<?php

require_once("dataHandler.php");

class parDireccionService extends dataHandler{

    public function getAll($tableName = ''){

        return parent::getAll('pardireccion');

    }

}

?>