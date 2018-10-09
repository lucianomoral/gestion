<?php

require_once("dataHandler.php");

class parOrigenFinancieroService extends dataHandler{

    public function getAll($tableName = ''){

        return parent::getAll('parorigenfinanciero');

    }

    public function getAllDetailed(){

        return json_encode(R::getAll("SELECT * FROM parorigenfinancierodetalle ORDER BY fecha desc LIMIT 0,10"));

    }

}

/*$OFS = new parOrigenFinancieroService();

echo $OFS->getAllDetailed();*/

?>