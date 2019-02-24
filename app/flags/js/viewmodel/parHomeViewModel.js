function parHomeViewModel() {
    var self = this;

    self.homeFactory = new homeFactory();
    self.novedadesPorMesArray = ko.observableArray();

    var mesActual = new Date();
    mesActual = mesActual.toLocaleDateString('es-ES', {month: 'long'});
    mesActual = mesActual.charAt(0).toUpperCase() + mesActual.slice(1);

    self.meses = ko.observableArray(["", "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"]);
    self.mesElegido = ko.observable(mesActual);
    self.tiposConcepto = ko.observableArray(["INGRESO", "GASTO", "EGRESO"]);
    self.tipoConceptoElegido = ko.observable("INGRESO");
    self.cajasArray = ko.observableArray();
    self.total = ko.observable(0);

    self.calculateTotal = function(){
        var _total = 0;

        $("#novedadesPorMes>tbody>tr:visible>td:nth-child(4)").each(function(){
            _total += Number($(this).html().replace(/[^0-9.-]+/g,""));
        });

        self.total("$ " + _total.toFixed(2));
    }

    self.ready = function(){
        self.homeFactory.getNovedadesPorMes().done(function(data){
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
        });

    }

    self.ready();

}

$(document).ready(function(){
	var div = $("#ko").get(0);
	ko.cleanNode(div);
    ko.applyBindings(new parHomeViewModel(), div);
});