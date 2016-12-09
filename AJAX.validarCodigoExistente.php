<?php

require_once("Conector.class.php");

$conexion = new Conector;

$conexion->connect();

if (isset($_GET['codProd'])){

	$idProd = $_GET['codProd'];

	$sql = "SELECT * FROM articulos WHERE IdArticulo = ?";
	$parm = array($idProd);

	$return = $conexion->getFirstReg($sql, $parm);

	if(empty($return)){

		$return = 0;

	} else {

		$return = 1;

	}

} else {

	$return = 0;

}

echo $return;

?>