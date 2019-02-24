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

}
