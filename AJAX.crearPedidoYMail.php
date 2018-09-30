<?php

require_once("Conector.class.php");

$conexion = new Conector;

$conexion->connect();

if (isset($_GET['IdProv'])){

    $idProv = $_GET['IdProv'];

    $sql = "SELECT Mail FROM proveedores WHERE IdProveedor = ?";

    $parm = array($idProv);

    $mail = $conexion->getFirstReg($sql, $parm)['Mail'];

    $sql = "INSERT INTO ordencompracabecera (IdProveedor, MailDestino) VALUES (?,?)";

    $parm = array($idProv, $mail);

    $status = $conexion->exec($sql, $parm);

    if ($status){

        

    }


}




?>