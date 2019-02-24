<?php

require_once("FamiliaArticuloService.php");

if (!isset($_GET['class'])){

    echo "Clase a instanciar no definida.";

} else if (!isset($_GET['method'])) {

    echo "Metodo a llamar no definido.";

} else {

    $classToCreate = "";
    $methodToCall = "";
    $_class = null;

    $classToCreate = $_GET['class'];
    $methodToCall = $_GET['method'];

    $_class = new $classToCreate();

    //Si vienen parámetros, llama al método con parámetros sino solo al método
    echo !isset($_GET['params']) ? $_class->{$methodToCall}() : $_class->{$methodToCall}($_GET['params']);
    

}


?>