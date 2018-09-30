<?php

require_once("libs/Smarty.class.php");

require_once("Conector.class.php");

$conexion = new Conector;
$conexion->connect();

$proveedores = $conexion->getTable("proveedores");

$smarty = new Smarty;

//print_r($proveedores);

$smarty->assign(array(

	'proveedores' => $proveedores

	));

$smarty->display("templates/ordenCompra.tpl");

?>