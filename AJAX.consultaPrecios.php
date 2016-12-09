<?php

require_once("Conector.class.php");

$conexion = new Conector;
$conexion->connect();

if(isset($_GET['idProd'])){

	$idProd = $_GET['idProd'];

	$sql = "SELECT A.Nombre AS Nombre , P.Costo AS Costo FROM articulos A INNER JOIN precios P ON A.IdArticulo = P.IdArticulo WHERE P.fecha = (SELECT MAX(fecha) FROM precios) AND A.IdArticulo = ?";

	$parm = array($idProd);

	$preciosProductos = $conexion->getView($sql, $parm);

	$preciosProductosJSON = json_encode($preciosProductos);

	echo $preciosProductosJSON;

} else if(isset($_GET['nombre'])){

	$nombre = $_GET['nombre'];

	$sql = "SELECT A.Nombre AS Nombre , P.Costo AS Costo FROM articulos A INNER JOIN precios P ON A.IdArticulo = P.IdArticulo WHERE P.fecha = (SELECT MAX(fecha) FROM precios) AND A.Nombre LIKE ?";

	$parm = array("%" . $nombre . "%");

	$preciosProductos = $conexion->getView($sql, $parm);

	$preciosProductosJSON = json_encode($preciosProductos);

	echo $preciosProductosJSON;

} else {

	echo false;

}

?>