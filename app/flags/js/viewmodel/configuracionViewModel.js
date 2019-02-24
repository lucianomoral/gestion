function configuracionViewModel() {
    var self = this;

    //Observables
    self.maestroElegido = ko.observable();
    self.idElegido = ko.observable();
    self.nombreElegido = ko.observable();
    self.lineaEditable = ko.observable();

    //ObservablesArray
    self.maestros = ko.observableArray();
    self.articulos = ko.observableArray([new Articulo()]);
    self.sucursales = ko.observableArray([new Sucursal()]);
    self.proveedores = ko.observableArray([new Proveedor()]);
    self.familiasArticulo = ko.observableArray([new FamiliaArticulo()]);
    
    //Factories
    self.familiaArticuloFactory = new FamiliaArticuloFactory();

    //Inicializaciones
    self.lineaEditable(0);
    self.maestros = ko.observableArray(["Articulos", "Sucursales", "Proveedores", "Familias de articulos"]);
    self.familiasArticulo.push({id: 1, nombre: 'Toallas'});
    self.familiasArticulo.push({id: 2, nombre: 'Sabanas'});

    //Funciones

    self.GuardarArticulo = function(){

        self.lineaEditable(-1);

    }

    self.EditarArticulo = function(linea){

        self.lineaEditable(linea);

    }


    self.CambiarLineaEditable = function(linea){

        self.lineaEditable(linea);

    }

    self.EliminarArticulo = function(){

        self.articulos.remove(this);

    }

    self.EliminarSucursal = function(){

        self.sucursales.remove(this);

    }

    self.EliminarProveedor = function(){

        self.proveedores.remove(this);

    }

    self.EliminarFamiliaArticulo = function(){

        self.familiasArticulo.remove(this);

    }

    self.Nuevo = function(){

        switch(self.maestroElegido()){

            case "Articulos":
                self.articulos.push(new Articulo({nombre: self.nombreElegido()}));
                self.CambiarLineaEditable(self.articulos().length - 1);
                break;

            case "Sucursales":
                self.sucursales.push(new Sucursal({nombre: self.nombreElegido()}));
                self.CambiarLineaEditable(self.sucursales().length - 1);
                break;

            case "Proveedores":
                self.proveedores.push(new Proveedor({nombre: self.nombreElegido()}));
                self.CambiarLineaEditable(self.proveedores().length - 1);
                break;            

            case "Familias de articulos":
                self.familiasArticulo.push(new FamiliaArticulo({nombre: self.nombreElegido()}));
                self.CambiarLineaEditable(self.familiasArticulo().length - 1);
                break;

            default:
                break;

        }


    }

    self.ready = function(){
        /*self.homeFactory.getNovedadesPorMes().done(function(data){
            data = JSON.parse(data);
            $.each(Object.keys(data), function(i, key){
                self.novedadesPorMesArray.push(data[key]);
            });
        });

        self.homeFactory.getCajas().done(function(data){
            data = JSON.parse(data);
            $.each(Object.keys(data), function(i, key){
                self.cajasArray.push(data[key]);
            });
        });*/

    }

    self.ready();

}

$(document).ready(function(){
	var div = $("#ko").get(0);
	ko.cleanNode(div);
    ko.applyBindings(new configuracionViewModel(), div);
});