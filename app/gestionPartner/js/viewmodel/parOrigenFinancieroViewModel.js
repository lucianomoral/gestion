function parOrigenFinancieroViewModel(){
    var self = this;
    self.parDireccionFactory = new parDireccionFactory();
    self.parOrigenFinancieroFactory = new parOrigenFinancieroFactory();
    self.parConceptoFactory = new parConceptoFactory();
    self.direccionesArray = ko.observableArray();
    self.novedadesArray = ko.observableArray();
    self.conceptosArray = ko.observableArray([{
        id: -1,
        nombreconcepto:"",
        idtipoconcepto:0,
        nombretipoconcepto:"",
        valorpredeterminado:0,
        cobradoeneldiapredeterminado:0,
        idclaseconcepto:0,
        nombreclaseconcepto:""
    }]); // Se inicializa así porque sino da error al bindear porque espera la respuesta del server
    self.direccionElegida = ko.observable(new parDireccion);
    self.conceptoElegido = ko.observable(new parConcepto());
    self.esentrega = ko.observable(false);
 
    self.ready = function(){
        self.parOrigenFinancieroFactory.getAll().done(function(data){
            data = JSON.parse(data);
            $.each(Object.keys(data), function(i, key){
                self.novedadesArray.push(new OrigenFinanciero(data[key]));
            });
            $("#formulario").collapse("hide");
            $("#contenido").collapse("show");
            $("#menu-toggle").click(function(e){
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
                if ($("#hideshowmenu").hasClass("glyphicon-arrow-left")){
                    $("#hideshowmenu").removeClass("glyphicon-arrow-left").addClass("glyphicon-arrow-right");
                } else {
                    $("#hideshowmenu").removeClass("glyphicon-arrow-right").addClass("glyphicon-arrow-left");
                }
            });
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

    self.ready();
}

$(document).ready(function(){
	var div = $("#ko").get(0);
	ko.cleanNode(div);
    ko.applyBindings(new parOrigenFinancieroViewModel(), div);
});