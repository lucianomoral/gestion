<?php

require_once("productoService.php");
require_once("compraController.php");
require_once("clienteService.php");
require_once("ventaController.php");

if (isset($_GET['model']))
{

    $tableName = $_GET['model'];

    switch ($tableName)
    {
      case "producto":
        $productoService = new productoService();
        $response = $productoService->getAll();
        echo $response;
        break;
      case "cliente":
        $clienteService = new clienteService();
        $response = $clienteService->getAll();
        echo $response;
        break;

    }
}

if (isset($_POST['function']))
{
  $function = $_POST['function'];
  $data = $_POST['data'];

  switch ($function) {
    case 'createPurchase':
      $compraController = new compraController();
      $response = $compraController->createPurchase($data);
      echo $response;
      break;
    case 'createOrder':
      $ventaController = new ventaController();
      $response = $ventaController->createOrder($data);
      echo $response;
      break;
    default:
      break;
  }


}

?>
