<?php

require_once("Conector.class.php");

$conexion = new Conector;

$conexion->connect();

$nombre = $_GET['nombre'];

//$nombre = "SONRISAS FRAMBUESA 36x118";

$sql = "SELECT * FROM articulos A INNER JOIN precios P on A.IdArticulo = P.IdArticulo WHERE A.Nombre = ? ORDER BY P.Fecha desc";
$parm = array($nombre);

$datosProducto = $conexion->getFirstReg($sql, $parm);

$datosProductoJSON = json_encode($datosProducto);

echo $datosProductoJSON;

?>