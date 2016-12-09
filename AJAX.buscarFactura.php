<?php

require_once("Conector.class.php");

$conexion = new Conector;

$idFactura = $_GET['factura'];

$conexion->connect();

$view = "SELECT A.IdArticulo AS IdArticulo, A.Nombre AS Nombre, F.cantidad AS cantidad, F.precio AS precio, ROUND((F.cantidad*F.precio), 2) AS total FROM facturalineastemp F INNER JOIN articulos A ON A.IdArticulo = F.idArticulo WHERE F.idFactura = ? ORDER BY F.idArticulo";

$parm = array($idFactura);

$factura = $conexion->getView($view, $parm);

$facturaJSON = json_encode($factura);

echo $facturaJSON;

?>