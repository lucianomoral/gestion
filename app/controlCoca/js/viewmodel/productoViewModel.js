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
  //Clientes
  self.clienteACrear = ko.observable(new cliente());
  self.clienteElegido = ko.observable();
  self.clienteAEditar = ko.observable(-1);

  //Productos
  self.productoACrear = ko.observable(new producto());
  self.productoElegido = ko.observable();
  self.productoAEditar = ko.observable(-1);

  //Pedidos
  self.pedidoElegido = ko.observable();
  self.previousSelectedIdPedido = ko.observable();
  self.editMode = ko.observable(false); //Solo aplica para pedidos
  self.fechaEntrega = ko.observable();
  self.confirmEnabled = ko.observable(true);

  //Otros
  self.tipoOperacion = ko.observable();
  self.sectionVisible = ko.observable();

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

  //Se llena el array de productos
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

  //Se llena el array de clientes
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
      //Si el tipo de operacion es VENTA
      case 'VENTA':
        //Se pasa como parametro la canasta de productos por un lado y  por el otro los datos de la venta
        self.productoCanastaFactory.confirmOrder({ productos: ko.toJS(self.productosArray()),
          venta: {idcliente: self.clienteElegido().id() , fechaentrega: self.fechaEntrega()} }).done(function(response)
          {
            //Se parsea la respuesta y se muestra el mensaje que viene con ella
            response = JSON.parse(response);
            alert(response.msg);

            //Se parsean los datos porque vienen como un string en vez de como JSON
            data = JSON.parse(response.data);

            //Se agrega el pedido como cabecera al desplegable de pedidos
            self.pedidosArray.push(new pedido(data.pedido));

            //Se recorren las lineas de pedido nuevas y se agregan
            $.each(Object.keys(data.pedidoDetalle), function(i,key)
            {
              self.pedidosDetalleArray.push(new pedidoDetalle(data.pedidoDetalle[key]));
            });

            //Se reinicia la canasta de productos
            self.cargarProductos();

            //Se habilita nuevamente el boton de Confirmar
            self.confirmEnabled(true);

            //Se esconde el modal
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
        self.clientesArray.push(self.clienteACrear());
        self.clienteACrear(new cliente());
      }
    });
  }

  self.editCliente = function(id)
  {
    if (self.clienteAEditar() != -1)
    {
      $.each(self.clientesArray(), function(i, cliente)
      {
        if (cliente.id() == self.clienteAEditar())
        {
          self.saveCliente(cliente, id);
          return false;
        }
      });
    }

    self.clienteAEditar(id);

  }

  self.saveCliente = function(cliente, id = null)
  {
    self.clienteFactory.update(ko.toJS(cliente)).done(function()
    {
      if (id)
      {

        self.clienteAEditar(id);

      } else {

        self.clienteAEditar(-1);

      }

    });
  }

  self.createProducto = function()
  {

    var fixedPath = "../img/";
    var file = document.getElementById('fotoProducto').files[0];
    var fileName = file.name;

    var reader = new FileReader();

    reader.readAsDataURL(file);

    reader.onloadend = function()
    {
      self.productoACrear().rutafoto(fixedPath + file.name);

      self.productoFactory.create(reader.result, fileName, ko.toJS(self.productoACrear)).done(function(response)
      {
        if (isNaN(response))
        {
          alert("Error al crear el producto");

        } else {

          self.productoACrear().id(response);
          self.productosArray.push(new productoCanasta(ko.toJS(self.productoACrear())));
          self.productoACrear(new producto());
          document.getElementById('fotoProducto').value = "";

        }
      });
    }

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

  self.deleteAllLinesForSelectedOrderFromArray = function()
  {
    var flag = true;
    while(flag)
    {
      flag=false;
      $.each(self.pedidosDetalleArray(), function(i, linea)
      {
        if (self.pedidoElegido().id() == linea.idmovimientoreferencia())
        {
          self.pedidosDetalleArray.splice(i,1);
          flag=true;
          return false;
        }
      });
    }
  }

  self.deleteSelectedOrderFromArray = function()
  {
    $.each(self.pedidosArray(), function(i, pedido)
    {
      if (self.pedidoElegido().id() == pedido.id())
      {
        self.pedidosArray.splice(i, 1);
        return false; //Para que salga del each cuando ya encontró el pedido
      }
    });
  }

  self.deliverPedido = function()
  {
    self.pedidoFactory.deliverPedido(ko.toJS(self.pedidoElegido())).done(function(response)
    {
      response = JSON.parse(response);
      alert(response.msg);
      self.cargarProductos();
      if (response.status == "OK")
      {
        self.deleteAllLinesForSelectedOrderFromArray();
        self.deleteSelectedOrderFromArray();

      }
    });

  }

  self.deletePedidoDetalle = function(pedidoDetalle)
  {
    self.pedidoFactory.deletePedidoDetalle(pedidoDetalle).done(function(response)
    {
        response = JSON.parse(response);
        if (response.status == "OK")
        {
            self.pedidosDetalleArray.remove(pedidoDetalle);

            if (response.action == 'deletePedido')
            {
              self.deleteSelectedOrderFromArray();
            }
        }
    })
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
