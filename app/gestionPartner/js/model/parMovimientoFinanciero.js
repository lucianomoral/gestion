function MovimientoFinanciero(pObj) {
    var iObj = {
        id: 0, 
        fecha:"",
        valororiginal: 0,
        valorpendiente: 0,
        idmoneda: 0,
        idcaja: 0,
        observacion: ""
    };
    
    $.extend(iObj, pObj);
    var self = this;

    self.id = ko.observable(iObj.id);
    self.fecha = ko.observable(iObj.fecha);
    self.valororiginal = ko.observable(iObj.valororiginal);
    self.valorpendiente = ko.observable(iObj.valorpendiente);
    self.idmoneda = ko.observable(iObj.nombre_moneda);
    self.idcaja = ko.observable(iObj.idcaja);
    self.observacion = ko.observable(iObj.observacion);

}