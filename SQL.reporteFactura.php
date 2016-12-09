<?php

require_once("Conector.class.php");
//require_once("PDF.class.php");

$idFactura = $_GET['factura'];

$conexion = new Conector;
$conexion->connect();

$sql = "SELECT A.IdArticulo AS IdArticulo, A.Nombre AS Nombre, F.cantidad AS cantidad, F.precio AS precio, ROUND((F.cantidad*F.precio), 2) AS total FROM facturalineastemp F INNER JOIN articulos A ON A.IdArticulo = F.idArticulo WHERE F.idFactura = ? ORDER BY F.idArticulo";

$parm = array($idFactura);

$factura = $conexion->getView($sql, $parm);

$total = 0;

$reporteFactura = "";

$reporteFactura .= "<DOCTYPE!>
					<html>
					<head>
						<meta charset = 'utf-8'>
						<style>
							td, th, .caption{
								border: 1px solid black;
								text-align:center;
							}

							.lineas td{

								color:blue;

							}

							.caption{

								font-weight:bold; 
								color:red;
							}
							.cabecera td{

								font-weight:bold;

							}
						</style>
					</head>
					<body>
						<table>
							<tr>
								<td class = 'caption' colspan = 5>Distribuidora DIGUS</td>
							</tr>
							<tr>
								<th>Nro:</th>
								<th colspan = 4> " . $idFactura . "</th>
							</tr>
							<tr class = 'cabecera'>
								<td>Cód.</td>
								<td>Nombre</td>
								<td>Cantidad</td>
								<td>Precio</td>
								<td>Total</td>
							</tr>";

	for($i = 0; $i < count($factura); $i++){

		$reporteFactura .= "<tr class='lineas'>
								<td>" . $factura[$i]['IdArticulo'] . "</td>
								<td>" . $factura[$i]['Nombre'] . "</td>
								<td>" . $factura[$i]['cantidad'] . "</td>
								<td>$ " . $factura[$i]['precio'] . "</td>
								<td>$ " . $factura[$i]['total'] . "</td></tr>";

		$total += $factura[$i]['total'];

	}


$reporteFactura .= "<tr><td colspan = 3></td><td>Total</td><td> $ ". $total . "</td></tr></table>";

echo $reporteFactura;

/*$pdf = new PDF;

$pdf->generarPDF($reporteFactura);*/

?>