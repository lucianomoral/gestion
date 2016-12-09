<?php

require_once("Conector.class.php");

$conexion = new Conector;

$conexion->connect();

/*$idProd = 1527;
$costoArt = 2.26;
$lista6Art = 2.4;
$lista10Art = 35;
$fecha = '2015-04-20';*/

if(isset($_GET['idProd']) && 
	isset($_GET['costoArt']) && 
	isset($_GET['lista6Art']) && 
	isset($_GET['lista10Art']) && 
	isset($_GET['fecha'])/* 0 == 0 */){

	$idProd = $_GET['idProd'];
	$costoArt = $_GET['costoArt'];
	$lista6Art = $_GET['lista6Art'];
	$lista10Art = $_GET['lista10Art'];
	$fecha = $_GET['fecha'];

	$sql = "SELECT MAX(Fecha) AS FechaMax FROM precios";
	$parm = array();

	$maxFechaTabla = $conexion->getFirstReg($sql, $parm)['FechaMax'];

	if($maxFechaTabla == $fecha){

		$sql = "UPDATE precios SET Lista6 = ?, Lista10 = ?, Costo = ? WHERE IdArticulo = ? AND Fecha = ?";
		$parm = array($lista6Art, $lista10Art, $costoArt, $idProd, $fecha);

		$conexion->exec($sql, $parm);

	} else {

		$sql = "INSERT INTO precios (IdArticulo, Lista6, Fecha, Lista10, Costo) VALUES (?, ?, ?, ?, ?)";
		$parm = array($idProd, $lista6Art, $maxFechaTabla, $lista10Art, $costoArt);

		$conexion->exec($sql, $parm);

	}

	$sql = "SELECT * FROM precios WHERE IdArticulo = ? ORDER BY Fecha DESC";
	$parm = array($idProd);

	$return = $conexion->getFirstReg($sql, $parm);

} else {

	$return = false;

}

$return = json_encode($return);

echo $return;

?>