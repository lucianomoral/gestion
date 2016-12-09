<?php

$user = "DIGUS";
$pass = "pelotudo2";

$userIngresado = $_GET['usuario'];
$passIngresado = $_GET['pass'];

if ($userIngresado == $user && $passIngresado == $pass){
    
    $respuesta = 1;
    
    echo $respuesta;
    
} else {
    
    $respuesta = 0;
    
    echo $respuesta;
    
}

?>