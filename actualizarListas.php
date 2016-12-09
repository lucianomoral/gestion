<?php

require_once("libs/Smarty.class.php");
require_once("Conector.class.php");

$conexion = new Conector;
$conexion->connect();

$idLista = $_GET['idLista'];

$sql = "SELECT * FROM listas WHERE idLista = ?";
$parm = array($idLista);

$listaDesc = $conexion->getView($sql, $parm)[0]['descripcion'];

$lista = $idLista;

$sql = "SELECT distinct familia as familia FROM articulos where familia != ''";
$parm = array();

$familia = $conexion->getAll($sql, $parm, "familia");

$sql = "SELECT distinct grupo as grupo FROM articulos where grupo != ''";
$parm = array();

$grupo = $conexion->getAll($sql, $parm, "grupo");

$smarty = new Smarty;

$smarty->assign(array(

		'idLista' => $lista,
		'listaDesc' => $listaDesc,
		'familia' => $familia,
		'grupo' => $grupo

	));

$smarty->display("templates/generarListas.tpl");

?>