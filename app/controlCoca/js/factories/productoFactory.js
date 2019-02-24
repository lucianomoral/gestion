function productoFactory () {

  var self = this;

  self.getAll = function()
  {
    return $.ajax({
      method: "GET",
      data: {model: "producto"},
      url: "../controller/mainController.php"
    });

  }

}
