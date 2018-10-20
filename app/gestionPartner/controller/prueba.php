<?php

require_once("../../../redbean/rb-mysql.php");

R::setup('mysql:host=localhost;dbname=kiosco', 'root', '');

R::freeze(TRUE); //Esto es para que no me altere el schema de la base de datos

## SELECT

$titular = R::load('parconcepto', 10);

print_r($titular->idtipoconcepto);


?>