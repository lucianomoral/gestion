<?php

require_once("productoService.php");
require_once("compraController.php");
require_once("clienteService.php");
require_once("ventaController.php");
require_once("movimientoStockService.php");

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
      case 'pedido':
        $ventaController = new ventaController();
        $response = $ventaController->getAllPedidos();
        echo $response;
        break;
      case 'pedidoDetalle':
        $ventaController = new ventaController();
        $response = $ventaController->getAllPedidosDetalle();
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
    case 'createCustomer':
      $clienteService = new clienteService();
      $response = $clienteService->create($data);
      echo $response;
      break;
    case 'updatePedido':
      $movimientoStock = new movimientoStockService();
      $response = $movimientoStock->update($data);
      echo $response;
      break;
    case 'deliverPedido':
      $ventaController = new ventaController();
      $response = $ventaController->deliverPedido($data);
      echo $response;
      break;
    case 'deletePedidoDetalle':
      $ventaController = new ventaController();
      $response = $ventaController->deleteLineaPedido($data);
      echo $response;
      break;
    default:
      break;
  }
}

if (isset($_GET['view']))
{
  $view = $_GET['view'];
  echo file_get_contents("../views/" . $view . ".html");

}

?>
