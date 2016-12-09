<?php

require_once("Conector.class.php");

$conexion = new Conector;

$conexion->connect();

if( 
	//0 == 0
	isset($_GET['codProd']) &&
	isset($_GET['nombreProd']) &&
	isset($_GET['cantPorBult']) &&
	isset($_GET['costoUnitario'])
	)
	{

		$codProd = $_GET['codProd'];
		$nombreProd = $_GET['nombreProd'];
		$cantPorBult = $_GET['cantPorBult'];
		$costoUnitario = doubleval($_GET['costoUnitario']);
		$listaSeis = round(($costoUnitario * 1.06) * 100) / 100;
		$listaDiez = round(($costoUnitario * 1.1) * 100) / 100;
		$fecha = $conexion->getFirstReg("SELECT MAX(Fecha) AS Fecha FROM precios", array())['Fecha'];

		echo $fecha;

		$sql = "INSERT INTO articulos (IdArticulo, Nombre, CantidadBulto) VALUES (?,?,?)";
		$parm = array($codProd, $nombreProd, $cantPorBult);

		$successOne = $conexion->exec($sql, $parm);

		$sql = "INSERT INTO precios (IdArticulo, Lista6, Fecha, Lista10, Costo) VALUES (?, ?, ?, ?, ?)";
		$parm = array($codProd, $listaSeis, $fecha, $listaDiez, $costoUnitario);

		$successTwo = $conexion->exec($sql, $parm);

		if(!$successOne){

			$return = 0;

			//Error al actualizar tabla de productos

		} else if (!$successTwo){

			$return = 0;

			//Error al actualizar tabla de precios

		} else {

			$return = 1;

		}

	} else {

		$return = 0;

	}

	echo $return;

?>