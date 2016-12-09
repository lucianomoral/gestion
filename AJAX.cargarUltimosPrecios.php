<?php

require_once("Conector.class.php");

$conexion = new Conector;

$conexion->connect();

if(isset($_GET['codProd'])){

	$codProd = $_GET['codProd'];

	$sql = "SELECT A.IdArticulo, A.Nombre, P.Costo, P.Lista6, P.Lista10, P.Fecha FROM precios P INNER JOIN articulos A ON P.IdArticulo = A.IdArticulo WHERE A.IdArticulo = ? ORDER BY A.IdArticulo, P.Fecha DESC";
	$parm = array($codProd);

	$result = $conexion->getView($sql, $parm);

} else if (isset($_GET['nombreProd'])) {

	$nombreProd = $_GET['nombreProd'];

	$sql = "SELECT A.IdArticulo, A.Nombre, P.Costo, P.Lista6, P.Lista10, P.Fecha FROM precios P INNER JOIN articulos A ON P.IdArticulo = A.IdArticulo WHERE A.Nombre LIKE ? ORDER BY A.IdArticulo, P.Fecha DESC";
	$parm = array("%" . $nombreProd . "%");

	$result = $conexion->getView($sql, $parm);	

} else {

	$result = false;

}

if(count($result) == 0){

	$result = false;

}

$result = json_encode($result);

echo $result;

?>