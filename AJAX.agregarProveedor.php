<?php

require_once("Conector.class.php");

$conexion = new Conector;

$conexion->connect();

if(isset($_GET['nombreProv']) &&
    isset($_GET['mailProv']))
{

	$nombreProv = $_GET['nombreProv'];
    $mailProv = $_GET['mailProv'];

	$sql = "INSERT INTO proveedores (Nombre, Mail) VALUES (?,?)";
	$parm = array($nombreProv, $mailProv);

	$return = $conexion->exec($sql, $parm);

} else {

	$return = false;

}

echo $return;

?>