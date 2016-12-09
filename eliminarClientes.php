<?php

require_once("libs/Smarty.class.php");
require_once("Conector.class.php");

$conexion = new Conector;
$conexion->connect();

$sql = "SELECT * FROM clientes";

$clientes = $conexion->getAll($sql, array(), "Nombre");

$ids = $conexion->getAll($sql, array(), "IdCliente");

$smarty = new Smarty;

$smarty->assign(array(

	'clientes' => $clientes,
	'ids' => $ids

	));

$smarty->display("templates/eliminarClientes.tpl");

?>