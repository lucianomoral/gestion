<?php

require_once("parOrigenFinancieroService.php");
require_once("parConceptoService.php");
require_once("parDireccionService.php");

if (!isset($_GET['classToCall'])){

    echo "Clase a instanciar no definida.";

} else if (!isset($_GET['methodToCall'])) {

    echo "Metodo a llamar no definido.";

} else {

    $classToCreate = "";
    $methodToCall = "";
    $_class = null;    

    $classToCreate = $_GET['classToCall'];
    $methodToCall = $_GET['methodToCall'];

    $_class = new $classToCreate();

    echo $_class->{$methodToCall}();

}


?>