<?php

$cliente = $_GET['cliente'];

require_once("Conector.class.php");

$conexion = new Conector;
$conexion->connect();

$sql = "SELECT * FROM facturatemp WHERE cerrada = '0' AND idCliente = ?";
$parm = array($cliente);

$facturasAbiertas = $conexion->getAll($sql, $parm, "idFactura");

$facturasAbiertasJSON = json_encode($facturasAbiertas);

echo $facturasAbiertasJSON;

?>