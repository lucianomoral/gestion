function clienteFactory()
{

  var self = this;

  self.getAll = function()
  {
    return $.ajax({
      method: 'GET',
      data: {model: 'cliente'},
      url: '../controller/mainController.php'
    });
  }

  self.create = function(data)
  {
    return $.ajax({
      method: "POST",
      data: {function: 'createCustomer',
            data: data},
      url: '../controller/mainController.php'
    });
  }

}
