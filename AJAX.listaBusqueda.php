<?php

require_once("Conector.class.php");

$conexion = new Conector;

$conexion->connect();

if (isset($_GET['familia'])){

	$familia = $_GET['familia'];

	$sql = "SELECT IdArticulo, Nombre FROM articulos WHERE familia = ? order by IdArticulo";
	$parm = array($familia);

	$result = $conexion->getView($sql, $parm);

} else if (isset($_GET['grupo'])){

	$grupo = $_GET['grupo'];

	$sql = "SELECT IdArticulo, Nombre FROM articulos WHERE grupo = ? order by IdArticulo";
	$parm = array($grupo);

	$result = $conexion->getView($sql, $parm);

} else if (isset($_GET['nombre'])){

	$nombre = $_GET['nombre'];

	$sql = "SELECT IdArticulo, Nombre FROM articulos WHERE Nombre LIKE ? order by IdArticulo";
	$parm = array("%" . $nombre . "%");

	$result = $conexion->getView($sql, $parm);

} else if (isset($_GET['idProd'])){

	$idProd = $_GET['idProd'];

	$sql = "SELECT IdArticulo, Nombre FROM articulos WHERE IdArticulo = ? order by IdArticulo";
	$parm = array($idProd);

	$result = $conexion->getView($sql, $parm);

}

	if ($result == false || count($result) == 0){

		$result = false;

	}

	$result = json_encode($result);

	echo $result;

?>