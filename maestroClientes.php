<?php

require_once("Conector.class.php");

echo "1";

$conexion = new Conector;

echo "2";

$conexion->connect();

echo "3";

if (isset($_GET['clienteAgregar'])){

	$cliente = $_GET['clienteAgregar'];

	$sql = "INSERT INTO clientes (Nombre) VALUES (?)";
	$parm = array($cliente);

	$success = $conexion->exec($sql, $parm);

	if ($success){

		echo "<script>alert('Cliente: $cliente ingresado correctamente.');</script>";

		require_once('main.php');

	} else {

		echo "<script>alert('No se pudo ingresar el cliente.')</script>";

		require_once("agregarClientes.php");

	}

} else if (isset($_GET['idCliente'])){

	$idCliente = $_GET['idCliente'];

	$sql = "DELETE FROM clientes WHERE IdCliente = ?";
	$parm = array($idCliente);

	$success = $conexion->exec($sql, $parm);

	if ($success){

		echo "<script>alert('Cliente eliminado correctamente.');</script>";

		require_once('main.php');

	} else {

		echo "<script>alert('No se pudo eliminar el cliente.')</script>";

		require_once("agregarClientes.php");

	}

}

?>