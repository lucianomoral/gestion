<?php

if (isset($_POST['file']))
{

  $path = "../img/" . $_POST['file']['fileName'];

  $data = explode(',', $_POST['file']['data']);

  $status = file_put_contents($path, base64_decode($data[1]));

  echo $status;

} else {

  echo "BBBBB";

}


?>
