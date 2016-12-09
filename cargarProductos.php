<?php

require_once("libs/Smarty.class.php");
require_once("Conector.class.php");

$smarty = new Smarty;

$conexion = new Conector;
$conexion->connect();

if(isset($_GET['cliente']) && isset($_GET['lista'])){

	if(isset($_GET['factAbiertas'])){

		$idFactura = $_GET['factAbiertas'];

		$sql = "SELECT * FROM facturatemp WHERE idFactura = ?";
		$parm = array($idFactura);

		$facturaAbierta = $conexion->getFirstReg($sql, $parm);

		$sql = "SELECT * FROM clientes WHERE IdCliente = ?";
		$parm = array($facturaAbierta["idCliente"]);

		$nombreCliente = $conexion->getFirstReg($sql, $parm)["Nombre"];
		$factura = $facturaAbierta['idFactura'];
		$lista = $facturaAbierta['lista'];

	} else {

		$cliente = $_GET['cliente'];
		$lista = $_GET['lista'];

		if(isset($_GET['descripcion'])){

			$descripcion = $_GET['descripcion'];

		} else {

			$descripcion = "";

		}

		$sql = "INSERT INTO facturatemp (idCliente, cerrada, lista, descripcion) VALUES(?, ?, ?, ?)";
		$parm = array($cliente, '0', $lista, $descripcion);

		$conexion->exec($sql, $parm);

		$sql = "SELECT max(idFactura) as factura FROM facturatemp";
		$parm = array();

		$factura = $conexion->getFirstReg($sql, $parm)['factura'];

		$sql = "SELECT * FROM clientes WHERE IdCliente = ?";
		$parm = array($cliente);

		$nombreCliente = $conexion->getFirstReg($sql, $parm)["Nombre"];

	}

		$smarty->assign(array(

			'cliente' => $nombreCliente,
			'lista' => $lista,
			'factura' => $factura
			)
		);

		$smarty->display("templates/cargarProductos.tpl");

	} else {

		echo "<script>alert('No se definió la lista y/o el cliente');</script>";

		require_once("generarPedidos.php");

}

?>