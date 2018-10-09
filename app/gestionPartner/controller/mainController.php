<?php

require_once("parOrigenFinancieroService.php");

if (!isset($_GET['classToCreate'])){

    echo "Clase a instanciar no definida.";

} else if (!isset($_GET['methodToCall'])) {

    echo "Metodo a llamar no definido.";

} else {

    $classToCreate = "";
    $methodToCall = "";
    $_class = null;
    

    $classToCreate = $_GET['classToCreate'];
    $methodToCall = $_GET['methodToCall'];

    $_class = new $classToCreate();

    echo $_class->{$methodToCall}();

}


?>