<?php

require_once("../../../redbean/rb-mysql.php");
require_once("../../../datosConexionLocal.php");

$datosConexion = new datosConexion;

R::setup('mysql:host=' . $datosConexion->getHost() . ';dbname=' . $datosConexion->getDb(), $datosConexion->getUser(), $datosConexion->getPass());

R::freeze(TRUE); //Esto es para que no me altere el schema de la base de datos

$data = R::findAll('partipoconcepto');

echo json_encode($data);

?>