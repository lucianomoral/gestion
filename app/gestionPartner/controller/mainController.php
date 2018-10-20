<?php

require_once("parConceptoService.php");
require_once("parDireccionService.php");
require_once("novedadService.php");


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

    //Si vienen parámetros, llama al método con parámetros sino solo al método
    echo !isset($_GET['params']) ? $_class->{$methodToCall}() : $_class->{$methodToCall}($_GET['params']);
    

}


?>