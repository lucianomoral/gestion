<?php

require_once("libs/Smarty.class.php");
require_once("Conector.class.php");
require_once("SQL.consultasVistas.php");

$conexion = new Conector;

$conexion->connect();

$parm = array();

$topProductos = $conexion->getView($vVentasTotalesPorArticulo, $parm);

$ventasPorCliente = $conexion->getView($vVentasPorCliente, $parm);

$ventasPorMes = $conexion->getView($vVentasPorMes, $parm);

$smarty = new Smarty;

$smarty->assign(array(

		'topProductos' => $topProductos,
		'ventasPorCliente' => $ventasPorCliente,
		'ventasPorMes' => $ventasPorMes

	));

$smarty->display("templates/estadisticas.tpl");

?>