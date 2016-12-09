<?php

require_once("Conector.class.php");

$busqProd = $_GET['busqProd'];

$conexion = new Conector;
$conexion->connect();

$sql = "SELECT * FROM articulos WHERE Nombre LIKE :Nombre";
$parm = array(":Nombre" => "%" . $busqProd . "%");

$articulos = $conexion->getAll($sql, $parm, "Nombre");

$articulosJSON = json_encode($articulos);

echo ($articulosJSON);

?>