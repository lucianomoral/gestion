<?php

require_once("Conector.class.php");

$conexion = new Conector;
$conexion->connect();

$cant = $_GET['cant'];
$lista = $_GET['lista'];
$margen = $_GET['margen'];

for ($i = 0; $i < $cant; $i++){

	if(isset($_GET[$i])){

		$idArticulo = $_GET[$i];

		$sql = "SELECT * FROM precios WHERE IdArticulo = ? AND fecha = (SELECT MAX(fecha) FROM precios)";

		$parm = array($idArticulo);

		$costo = $conexion->getFirstReg($sql, $parm)['Costo'];

		$margen = round(($costo * (1 + ($margen / 100))), 2);

		$sql = "INSERT INTO listaslineas (idLista, idArticulo, precio) VALUES (?,?,?)";

		$parm = array($lista, $idArticulo, $margen);

		$conexion->exec($sql, $parm);

	}

}

$sql = "SELECT A.IdArticulo as idArticulo, A.Nombre as Nombre, L.precio as Precio FROM listaslineas L INNER JOIN articulos A ON L.idArticulo = A.IdArticulo WHERE L.idLista = ?";

$parm = array($lista);

$lineasLista = $conexion->getView($sql, $parm);

$lineasLista = json_encode($lineasLista);

echo $lineasLista;

?>
