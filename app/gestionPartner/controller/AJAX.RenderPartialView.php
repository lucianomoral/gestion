<?php

$view = $_GET['view'];

echo file_get_contents("../views/" . $view . ".html");

?>