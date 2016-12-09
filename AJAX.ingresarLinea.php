<?php

require_once("Conector.class.php");

$conexion = new Conector;

$idFactura = $_GET['factura'];
$idArticulo = $_GET['idProd'];
$precio = $_GET['precio'];
$cant = $_GET['cant'];

$conexion->connect();

$sql = "INSERT INTO facturalineastemp (idFactura, idArticulo, cantidad, precio) VALUES (?, ?, ?, ?)";
$parm = array($idFactura, $idArticulo, $cant, $precio);

$conexion->exec($sql, $parm);

$view = "SELECT A.IdArticulo AS IdArticulo, A.Nombre AS Nombre, F.cantidad AS cantidad, F.precio AS precio, ROUND((F.cantidad*F.precio), 2) AS total FROM facturalineastemp F INNER JOIN articulos A ON A.IdArticulo = F.idArticulo WHERE F.idFactura = ? ORDER BY F.idArticulo";
$parm = array($idFactura);

$factura = $conexion->getView($view, $parm);

$facturaJSON = json_encode($factura);

echo $facturaJSON;

?>