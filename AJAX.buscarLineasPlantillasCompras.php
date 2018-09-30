<?php

require_once("Conector.class.php");

$conexion = new Conector;

$conexion->connect();

if(isset($_GET['IdProv']))
{
    $idProv = $_GET['IdProv'];

    $view = "SELECT DescArt, Cantidad, Precio FROM plantillaordencompra WHERE IdProveedor = ?";

    $parm = array($idProv);

    $plantilla = $conexion->getView($view, $parm);

}

$plantillaJSON = json_encode($plantilla);

echo $plantillaJSON;

?>