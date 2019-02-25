function productoViewModel()
{
  var self = this;

  //Factories: son functions de JS que gestionan el manejo de datos con el back-end
  self.productoFactory = new productoFactory();
  self.productoCanastaFactory = new productoCanastaFactory();
  self.clienteFactory = new clienteFactory();
  self.pedidoFactory = new pedidoFactory();

  //ObservableArrays
  self.productosArray = ko.observableArray();
  self.clientesArray = ko.observableArray();
  self.pedidosArray = ko.observableArray();
  self.pedidosDetalleArray = ko.observableArray();

  //Observables
  self.clienteACrear = ko.observable(new cliente());
  self.clienteElegido = ko.observable();
  self.tipoOperacion = ko.observable();
  self.fechaEntrega = ko.observable();
  self.confirmEnabled = ko.observable(true);
  self.pedidoElegido = ko.observable();
  self.editMode = ko.observable(false);
  self.sectionVisible = ko.observable();
  self.previousSelectedIdPedido = ko.observable();

  self.ready = function()
  {
      self.cargarProductos();
      self.cargarClientes();
      self.cargarFechaEntregaDefault();
      self.cargarPedidos();
      self.cargarDetallePedidos();
  }

  self.cargarFechaEntregaDefault = function()
  {

    var fechaActual = new Date();

    var dd = fechaActual.getDate();
    var mm = fechaActual.getMonth() + 1;
    var yyyy = fechaActual.getFullYear();

    if (dd < 10)
    {
      dd = '0' + dd;
    }

    if (mm < 10)
    {
      mm = '0' + mm;
    }

    var fechaActual = yyyy + '-' + mm + '-' + dd;

    self.fechaEntrega(fechaActual);

  }

  self.cargarProductos = function()
  {

    self.productosArray([]);

    //Esto devuelve todos los productos de la tabla producto
    self.productoFactory.getAll().done(function(data)
    {
      data = JSON.parse(data);

      //Se cargan en productoCanasta que aparte de los campos de la tabla producto tiene cantidad y precio
      $.each(Object.keys(data), function(i, key)
      {
        self.productosArray.push(new productoCanasta(data[key]));
      });
    });

  }

  self.cargarClientes = function()
  {
    self.clientesArray([]);

    self.clienteFactory.getAll().done(function(data)
    {
      data = JSON.parse(data);

      $.each(Object.keys(data), function(i, key)
      {
        self.clientesArray.push(new cliente(data[key]));
      });
    });

  }

  //Funcion para que el boton '+' le sume de a una unidad a la cantidad
  self.addUnit = function(idProducto)
  {

    //Recorro todos los productos hasta encontrar el que coincide el id
    $.each(self.productosArray(), function(key, item)
    {
      if (item.id() == idProducto)
      {
        //Si entra, creo la variable qty
        var qty = 0;

        // Si es la primera vez va a ser un string, entonces comparo con vacio y le sumo uno
        if (item.cantidad() == "")
        {
          item.cantidad(qty + 1);
          return true;
        //Si no es la primera vez, va a tener valor numerico entonces le sumo uno
        } else {
          qty = parseFloat(item.cantidad());
          item.cantidad(qty + 1);
          return true;
        }
      }
    });

  }

  //Function para que el boton '-' le reste una unidad a la cantidad
  self.substractUnit = function(idProducto)
  {
    //Recorro todos los productos hasta encontrar el que coincide el id
    $.each(self.productosArray(), function(key, item)
    {
      if (item.id() == idProducto)
      {
        //Si entra, creo la variable qty
        var qty = 0;

        // Si es la primera vez va a ser un string, entonces comparo con vacio y le resto uno
        if (item.cantidad() == "")
        {
          item.cantidad(qty - 1);
          return true;
        //Si no es la primera vez, va a tener valor numerico entonces le resto uno
        } else {
          qty = parseFloat(item.cantidad());
          item.cantidad(qty - 1);
          return true;
        }
      }
    });
  }

  self.confirmOperation = function(tipoOperacion)
  {
    switch (tipoOperacion) {
      case 'VENTA':
        self.productoCanastaFactory.confirmOrder({ productos: ko.toJS(self.productosArray()),
          venta: {idcliente: self.clienteElegido().id() , fechaentrega: self.fechaEntrega()} }).done(function(response)
          {
            response = JSON.parse(response);
            alert(response.msg);
            self.cargarProductos();
            //self.cargarPedidos();
            //self.cargarDetallePedidos();
            self.confirmEnabled(true);
            $('#canasta').modal('hide');
          });
        break;
      case 'COMPRA':
        self.productoCanastaFactory.confirmPurchase({productos: ko.toJS(self.productosArray())}).done(function(response)
        {
          response = JSON.parse(response);
          alert(response.msg);
          self.cargarProductos();
          self.confirmEnabled(true);
          $('#canasta').modal('hide');
        });
        break;
      default:
        break;
    }
  }

  self.createCliente = function()
  {
    self.clienteFactory.create(ko.toJS(self.clienteACrear())).done(function(response)
    {
      if (!isNaN(response))
      {
        self.clienteACrear().id(response);
        //console.log(self.clienteACrear());
        self.clientesArray.push(self.clienteACrear());
        self.clienteACrear(new cliente());
      }
    });
  }

  self.activateEditMode = function()
  {
    self.editMode(true);
  }

  self.savePreviousSelectedPedido = function()
  {
    if (self.editMode())
    {
      self.previousSelectedIdPedido(self.pedidoElegido().id());
      self.savePedido(self.previousSelectedIdPedido());
    }
  }

  self.savePedido = function(id)
  {
    self.finishEditMode();
    $.each(self.pedidosDetalleArray(), function(i, item){
        if (item.idmovimientoreferencia() == id)
        {
            self.pedidoFactory.updatePedido(ko.toJS(item)).done(function(response)
            {
              if (isNaN(response))
              {
                alert("Error al actualizar pedido.");
              }
            });
        }
    });
  }

  self.deliverPedido = function()
  {
    self.pedidoFactory.deliverPedido(ko.toJS(self.pedidoElegido())).done(function(response)
    {
      response = JSON.parse(response);
      alert(response.msg);
    });
  }

  self.finishEditMode = function()
  {
    self.editMode(false);
  }

  self.renderView = function(viewName)
  {
    $.ajax({
      method: "GET",
      url: "../controller/mainController.php",
      data: {view: viewName},
      success: function(response){$("#main-container").html(response);}
    });

  }

  self.cargarPedidos = function()
  {
    self.pedidosArray([]);
    self.pedidoFactory.getAll().done(function(response)
    {
      response = JSON.parse(response);
      $.each(Object.keys(response), function(i, key)
      {
          self.pedidosArray.push(new pedido(response[key]));
      });

    });
  }

  self.cargarDetallePedidos = function()
  {
    self.pedidosDetalleArray([]);
    self.pedidoFactory.getAllDetalle().done(function(response)
    {
      response = JSON.parse(response);
      $.each(Object.keys(response), function(i, key)
      {
          self.pedidosDetalleArray.push(new pedidoDetalle(response[key])); //Una linea de pedido es un movimientostock con stockimpactado == 0
      });

    });
  }

  self.ready();

}

$(document).ready(function(){
  var div = $("#ko").get(0);
  ko.cleanNode(div);
  ko.applyBindings(new productoViewModel());

});
