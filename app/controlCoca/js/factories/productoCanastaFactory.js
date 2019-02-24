function productoCanastaFactory () {

  var self = this;

  self.confirmPurchase = function(data)
  {
    return $.ajax({
      method: "POST",
      data: {data: data,
        function: "createPurchase"
      },
      url: "../controller/mainController.php"
    });

  }

  self.confirmOrder = function(data)
  {
    return $.ajax({
      method: "POST",
      data: {data: data,
          function: "createOrder"
      },
      url: "../controller/mainController.php"
    });
  }

}
