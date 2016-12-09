<?php

require_once("libs/Smarty.class.php");
require_once("Conector.class.php");

$smarty = new Smarty;
$conexion = new Conector;

$conexion->connect();

$sql = "SELECT F.idFactura AS IdFactura, C.Nombre AS Nombre, F.descripcion AS Descripcion, F.idCliente AS IdCliente FROM facturatemp F INNER JOIN clientes C ON F.idCliente = C.IdCliente WHERE F.cerrada = '1' ORDER BY F.fechaCrea DESC";
$parm = array();

$facturasCerradas = $conexion->getView($sql, $parm);

$clientes = $conexion->getTable("clientes");

$smarty->assign(array(

		'clientes' => $clientes,
		'facturasCerradas' => $facturasCerradas

	)
);

$smarty->display("templates/facturasCerradas.tpl");

?>