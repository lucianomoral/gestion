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

  self.create = function(fileBase64, fileName, data)
  {
      return $.ajax({
        method: "POST",
        data: {function: 'createProduct',
              data: data,
              file: {data: fileBase64,
                    fileName: fileName}
              },
        url: "../controller/mainController.php"
      });
  }

}
