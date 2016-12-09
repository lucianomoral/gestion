<?php

//require_once("PDF.class.php");
require_once("Conector.class.php");

$conexion = new Conector;
$conexion->connect();

$idLista = $_GET['lista'];
$desc = $_GET['listaDesc'];

$sql = "SELECT A.IdArticulo AS idArticulo, A.Nombre as Nombre, L.precio AS Precio, A.CantidadBulto AS CantBult FROM listaslineas L INNER JOIN articulos A ON L.idArticulo = A.IdArticulo WHERE L.idLista = ?";

$parm = array($idLista);

$listasLineas = $conexion->getView($sql, $parm);

$lista = "<style>

td {
	color: blue;
	border: 1px solid black;  
	text-align: center; 

}

th{

	border: 1px solid black;

}

/* se puede usar el siguiente contenedor para centrar la tabla*/

#contenedor{

	/*margin-top: auto; 
	margin-left: 150px;
	margin-top: auto;
	margin-bottom: auto;*/

}

</style>
<div id = 'principal'>
	<div id = 'contenedor'>
		<table>
			<tr>
				<th colspan = '4'>
					$desc
				</th>
			</tr>
			<tr>
				<th>Id.</th>
				<th>Nombre</th>
				<th>CxB</th>
				<th >Precio</th>
			</tr>";

for ($i = 0; $i < count($listasLineas); $i++){

	$lista .= "<tr>
			<td >" . $listasLineas[$i]['idArticulo'] . "</td>
			<td >" . $listasLineas[$i]['Nombre'] . "</td>
			<td >" . $listasLineas[$i]['CantBult'] . "</td>
			<td >$ " . $listasLineas[$i]['Precio'] . "</td>
			</tr>";

}

$lista .= "</table></div></div><br><br>";

echo $lista;

/*$pdf = new PDF;

$pdf->generarPDF($lista);*/

?>