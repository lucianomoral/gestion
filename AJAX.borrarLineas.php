<?php

require_once("Conector.class.php");

$conexion = new Conector;
$conexion->connect();

$idFactura = $_GET['factura'];

$sql = "SELECT * FROM facturalineastemp WHERE idFactura = ? ORDER BY idArticulo";
$parm = array($idFactura);

$lineasABorrar = $conexion->getAll($sql, $parm, 'idArticulo');

$cantLineas = count($lineasABorrar);

$sql = "DELETE FROM facturalineastemp WHERE idArticulo = ? and idFactura = ?";

for ($i = 0; $i < $cantLineas; $i++){

	if(isset($_GET[$i])){

		$parm = array($lineasABorrar[$i], $idFactura);
		$conexion->exec($sql, $parm);

	}

}

$view = "SELECT A.IdArticulo AS IdArticulo, A.Nombre AS Nombre, F.cantidad AS cantidad, F.precio AS precio, ROUND((F.cantidad*F.precio), 2) AS total FROM facturalineastemp F INNER JOIN articulos A ON A.IdArticulo = F.idArticulo WHERE F.idFactura = ? ORDER BY F.idArticulo";

$parm = array($idFactura);

$factura = $conexion->getView($view, $parm);

$facturaJSON = json_encode($factura);

echo $facturaJSON;

?>

