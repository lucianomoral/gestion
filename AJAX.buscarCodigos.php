<?php

require_once("Conector.class.php");

$conexion = new Conector;
$conexion->connect();

//$codProd = '4013';

if (isset($_GET['codProd'])){

//if (isset($codProd)){

	$codProd = $_GET['codProd'];

	$sql = "SELECT * FROM articulos A INNER JOIN precios P on A.IdArticulo = P.IdArticulo WHERE A.IdArticulo = ? ORDER BY P.Fecha desc";
	$parm = array($codProd);

	$articulos = $conexion->getFirstReg($sql, $parm);

	$articulosJSON = json_encode($articulos);

	echo $articulosJSON;

}



?>