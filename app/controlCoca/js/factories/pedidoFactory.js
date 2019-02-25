function pedidoFactory()
{

  var self = this;

  self.getAll = function()
  {
    return $.ajax({
      method: "GET",
      data: {model: 'pedido'},
      url: "../controller/mainController.php"
    });

  }

  self.getAllDetalle = function()
  {
    return $.ajax({
      method: "GET",
      data: {model: 'pedidoDetalle'},
      url: "../controller/mainController.php"
    });

  }

  self.updatePedido = function(data)
  {
    return $.ajax({
      method: "POST",
      data: {function: 'updatePedido',
            data: data},
      url: '../controller/mainController.php'
    });
  }

  self.deliverPedido = function(data)
  {
    return $.ajax({
      method: 'POST',
      data: {function: 'deliverPedido',
            data: data},
      url: '../controller/mainController.php'
    });
  }

}
