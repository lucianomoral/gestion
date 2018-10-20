function parOrigenFinancieroViewModel(){
    var self = this;
    self.parDireccionFactory = new parDireccionFactory();
    self.parOrigenFinancieroFactory = new parOrigenFinancieroFactory();
    self.parConceptoFactory = new parConceptoFactory();
    self.direccionesArray = ko.observableArray();
    self.novedadesArray = ko.observableArray();
    self.conceptosArray = ko.observableArray([new parConcepto({
        id: -1,
        nombreconcepto:"",
        idtipoconcepto:0,
        nombretipoconcepto:"",
        valorpredeterminado:0,
        cobradoeneldiapredeterminado:0,
        idclaseconcepto:0,
        nombreclaseconcepto:""
    })]); // Se inicializa así porque sino da error al bindear porque espera la respuesta del server
    self.direccionElegida = ko.observable(new parDireccion());
    self.direccionACrear = ko.observable(new parDireccion());
    self.conceptoElegido = ko.observable(new parConcepto());
    self.esentrega = ko.observable(false);
    self.novedadACrear = ko.observable(new Novedad());

    ko.computed(function() {
        return ko.toJSON(self.conceptoElegido());
    }).subscribe(function() {
        if(self.conceptoElegido()){
            self.novedadACrear().idconcepto(self.conceptoElegido().id());
            self.novedadACrear().valororiginal(self.conceptoElegido().valorpredeterminado());
        }
    });
    
    ko.computed(function() {
        return ko.toJSON(self.direccionElegida());
    }).subscribe(function(){
        if(self.direccionElegida()){
            self.novedadACrear().iddireccion(self.direccionElegida().id());
        }
    });

    self.esentrega.subscribe(function(value){
            self.novedadACrear().esentrega(value);
    });

    self.ready = function(){
        self.parOrigenFinancieroFactory.getAll().done(function(data){
            data = JSON.parse(data);
            $.each(Object.keys(data), function(i, key){
                self.novedadesArray.push(new OrigenFinanciero(data[key]));
            });
            $("#formulario").collapse("hide");
            $("#contenido").collapse("show");
        });
        self.parConceptoFactory.getAll().done(function(data){
            data = JSON.parse(data);
            $.each(Object.keys(data), function(i, key){
                self.conceptosArray.push(new parConcepto(data[key]));
            });
        });

        self.parDireccionFactory.getAll().done(function(data){
            data = JSON.parse(data);
            $.each(Object.keys(data), function(i, key){
                self.direccionesArray.push(new parDireccion(data[key]));
            });
        });

    };

    self.Nuevo = function() {
        $("#contenido").collapse("hide");
        $("#formulario").collapse("show");
    };

    self.Cancelar = function(){
        $("#contenido").collapse("show");
        $("#formulario").collapse("hide");
    }

    self.NuevaDireccion = function(){
        if(!self.direccionACrear().direccion()){
            alert("DIRECCION VACIA");
        } else {
            self.parDireccionFactory.create(ko.toJS(self.direccionACrear())).done(function(data){
                if(!isNaN(data)){ //Si no viene un número significa que no pudo generar el id del registro
                    self.direccionACrear().id(data); //Asigno id recibido
                    self.direccionesArray.push(self.direccionACrear()); //Agrego la nueva direccion al desplegable
                    self.direccionElegida(self.direccionACrear()); // Selecciono la nueva direccion creada en el desplegable
                    self.direccionACrear(new parDireccion()); //Resetea los valores del modal
                    $("#direccionModal").modal("hide"); // Esconde el modal
                } else {
                    alert("Error al crear dirección.");
                }
            });
        }
    }

    self.NuevaNovedad = function(){

        var json = ko.toJS(self.novedadACrear());
        
        console.log(json);

        if( !json.fecha || !json.idconcepto || !json.valororiginal || !json.idmoneda || !json.idtitular || (json.esentrega && !json.iddireccion) )
        {
            alert("Falta información necesaria para crear la novedad");

        } else {

            self.parOrigenFinancieroFactory.create(json).done(function(data){
                if(!isNaN(data)){
                    self.conceptoElegido(self.conceptosArray()[0]);
                    self.novedadACrear(new Novedad());
                    self.Cancelar();
                } else {
                    alert("Error al crear la novedad");
                }
            });

        }

        //console.log("Direccion: "+ self.direccionElegida().id() + " - " + self.direccionElegida().direccion());
        //console.log(ko.toJS(self.novedadACrear()));
        
    }

    self.ready();
}

$(document).ready(function(){
	var div = $("#ko").get(0);
	ko.cleanNode(div);
    ko.applyBindings(new parOrigenFinancieroViewModel(), div);
});