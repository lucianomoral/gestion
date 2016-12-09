<?php

require_once("libs/Smarty.class.php");

require_once("Conector.class.php");

$conexion = new Conector;
$conexion->connect();

$listasGuardadas = $conexion->getTable("listas");

$smarty = new Smarty;

$smarty->assign(array(

	'listasGuardadas' => $listasGuardadas

	));

$smarty->display("templates/listasGuardadas.tpl");

?>