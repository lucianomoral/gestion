<?php

require_once("libs/Smarty.class.php");
require_once("Conector.class.php");

$conector = new Conector;
$conector->connect();

$sql = "SELECT * FROM clientes";
$parm = array();

$clientes = $conector->getAll($sql, $parm, "Nombre");
$ids = $conector->getAll($sql, $parm, "IdCliente");

$smarty = new Smarty;

if(empty($clientes)){

	$clientes = array();
	$ids = array();

}

$smarty->assign(array(

		'clientes' => $clientes,
		'ids' => $ids

	));

$smarty->display("templates/generarPedidos.tpl");

?>