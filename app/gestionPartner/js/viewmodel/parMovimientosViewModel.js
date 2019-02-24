function parMovimientoFinancieroViewModel(){
    var self = this;
    self.novedadesArray = ko.observableArray();
    self.movimientoACrear = ko.observable(new MovimientoFinanciero());
    self.parMovimientoFinancieroFactory = new parMovimientoFinancieroFactory();
    self.fechaAhorro = ko.observable();
    self.montoAhorro = ko.observable();
    self.observacionAhorro = ko.observable("");
    self.cajasArray = ko.observableArray();
    self.cajaDesde = ko.observable();
    self.cajaHacia = ko.observable();
    self.cajaDesdeElegida = ko.observable();
    self.cajaHaciaElegida = ko.observable();
    self.saveEnabled = ko.observable(0);

    self.ready = function(){
        self.parMovimientoFinancieroFactory.getCajas().done(function(data){
            data = JSON.parse(data);
            $.each(Object.keys(data), function(i, key){
                self.cajasArray.push(data[key]);
            });

        });

        self.parMovimientoFinancieroFactory.getPending().done(function(data){
            data = JSON.parse(data);
            $.each(Object.keys(data), function(i, key){
                self.novedadesArray.push(new OrigenFinanciero(data[key]));
            });
            $("#formulario").collapse("hide");
            $("#contenido").collapse("show");
        });
    };

    self.Nuevo = function() {
        $("#contenido").collapse("hide");
        $("#formulario").collapse("show");
    };

    self.Cancelar = function(){
        $("#contenido").collapse("show");
        $("#formulario").collapse("hide");
    };

    self.Cobrar = function(item){
        
        self.saveEnabled(item.id()); //Se cambia este valor para que se bloquee el boton y no se mande dos veces
        self.movimientoACrear().id(item.id());
        self.movimientoACrear().fecha(item.fecha());
        self.movimientoACrear().valororiginal(item.valororiginal());
        self.movimientoACrear().valorpendiente(item.valorpendiente());
        self.movimientoACrear().observacion("");
        self.movimientoACrear().idmoneda(1);
        self.movimientoACrear().idcaja(1);

        json = ko.toJS(self.movimientoACrear);

        json.cajaDesde = 3;
        json.cajaHacia = 1;

        self.parMovimientoFinancieroFactory.collect(json).done(function(data){
            data = JSON.parse(data);
            if (data.status == 1){

                self.novedadesArray.remove(item);

            }
        });
        
    };

    self.Ahorrar = function(){
        
        if(!self.fechaAhorro() || !self.montoAhorro()) {

            alert("Faltan completar datos");

        } else if (self.cajaDesdeElegida().id == self.cajaHaciaElegida().id){

            alert("Las cajas no pueden ser iguales.");

        } else {
        
            self.movimientoACrear().id(0);
            self.movimientoACrear().fecha(self.fechaAhorro());
            self.movimientoACrear().valororiginal(self.montoAhorro());
            self.movimientoACrear().valorpendiente(self.montoAhorro());
            self.movimientoACrear().observacion(self.observacionAhorro());
            self.movimientoACrear().idmoneda(1);
            self.movimientoACrear().idcaja(1);

            json = ko.toJS(self.movimientoACrear);

            json.cajaDesde = self.cajaDesdeElegida().id;
            json.cajaHacia = self.cajaHaciaElegida().id;

            self.parMovimientoFinancieroFactory.save(json).done(function(data){
                data = JSON.parse(data);
                if (data.status == 1){
    
                    self.fechaAhorro("");
                    self.montoAhorro(0);
                    self.observacionAhorro("");
                    self.Cancelar();
    
                } 
            });

        }
        
    };

    self.ready();
}

$(document).ready(function(){
	var div = $("#ko").get(0);
	ko.cleanNode(div);
    ko.applyBindings(new parMovimientoFinancieroViewModel(), div);
});