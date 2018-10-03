<?php

$view = $_GET['view'];

echo file_get_contents("views/gestionPartner/" . $view . ".html");

?>