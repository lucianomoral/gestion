<?php

require_once("libs/Smarty.class.php");
require_once("redbean/rb-mysql.php");

$smarty = new Smarty;

R::setup('mysql:host=localhost;dbname=kiosco', 'root', '');

R::freeze(TRUE); //Esto es para que no me altere el schema de la base de datos

$titulares = R::findAll('parmoneda');

$smarty->assign(array(

        "titulares" => $titulares

));

$smarty->display("views/gestionPartner.tpl");

?>