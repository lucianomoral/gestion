<?php

require_once("Conector.class.php");
require_once("libs/Smarty.class.php");

$conexion = new Conector;
$conexion->connect();

$factura = $_GET['factura'];

$sql = "UPDATE facturatemp SET cerrada = '1' WHERE idFactura = ?";
$parm = array($factura);

$success = $conexion->exec($sql, $parm);

if($success){

	echo "<script>alert('Factura cerrada correctamente')</script>;";

} else {

	echo "<script>alert('Ocurrió un error inesperado. La factura no se cerró.')</script>";

}

$smarty = new Smarty;

$smarty->display('templates/main.tpl');

?>