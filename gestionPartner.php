<?php

require_once("libs/Smarty.class.php");
require_once("redbean/rb-mysql.php");
require_once("datosConexionLocal.php");

$datosConexion = new datosConexion;
$smarty = new Smarty;

R::setup('mysql:host=' . $datosConexion->getHost() . ';dbname=' . $datosConexion->getDb(), $datosConexion->getUser(), $datosConexion->getPass());

R::freeze(TRUE); //Esto es para que no me altere el schema de la base de datos

$titulares = R::findAll('partitular');

$smarty->assign(array(

        "titulares" => $titulares

));

$smarty->display("views/gestionPartner.tpl");

?>