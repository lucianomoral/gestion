<?php

require_once('Conector.class.php');

$lista = $_GET['lista'];

$conexion = new Conector;
$conexion->connect();

$sql = "SELECT A.idArticulo AS idArticulo, A.Nombre as Nombre, L.precio AS Precio FROM listaslineas L INNER JOIN articulos A ON L.idArticulo = A.IdArticulo WHERE L.idLista = ?";
$parm = array($lista);

$listasLineas = $conexion->getView($sql, $parm);

ob_start();

?>

<table><tr><th>Id.</th><th>Nombre</th><th >Precio</th></tr>

<?php 

for ($i = 0; $i < count($listasLineas); $i++){

	echo "<tr><td >" . $listasLineas[$i]['idArticulo'] . "</td><td >" . $listasLineas[$i]['Nombre'] . "</td><td >" . $listasLineas[$i]['Precio'] . "</td></tr>";

}

?>

</table><br><br>

<?php

$out = ob_get_contents();
ob_end_flush();

?>

<a href="reportePDF2.php" target="_blank"><input type = "button" value = "Exportar">

<?php
	
	session_start();

   $_SESSION['prints'] = array('pdf'=>$out);

?>