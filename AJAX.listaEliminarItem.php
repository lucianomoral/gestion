<?php

require_once("Conector.class.php");

$conexion = new Conector;
$conexion->connect();

$cant = $_GET['cant'];
$lista = $_GET['lista'];

for ($i = 0; $i < $cant; $i++){

	if(isset($_GET[$i])){

		$idArticulo = $_GET[$i];

		$sql = "DELETE FROM listaslineas WHERE idLista = ? AND idArticulo = ?";

		$parm = array($lista, $idArticulo);

		$conexion->exec($sql, $parm);

	}

}

$sql = "SELECT A.IdArticulo as idArticulo, A.Nombre as Nombre, L.precio as Precio FROM listaslineas L INNER JOIN articulos A ON L.idArticulo = A.IdArticulo WHERE L.idLista = ?";

$parm = array($lista);

$lineasLista = $conexion->getView($sql, $parm);

$lineasLista = json_encode($lineasLista);

echo $lineasLista;

?>