<?php

require_once("Conector.class.php");

$conexion = new Conector;
$conexion->connect();

$idLista = $_GET['lista'];

$sql = "SELECT A.IdArticulo as idArticulo, A.Nombre as Nombre, L.precio as Precio FROM listaslineas L INNER JOIN articulos A ON L.idArticulo = A.IdArticulo WHERE L.idLista = ?";

$parm = array($idLista);

$lineasLista = $conexion->getView($sql, $parm);

$lineasLista = json_encode($lineasLista);

echo $lineasLista;

?>