function Novedad(pObj) {
    var iObj = {
        id: 0, 
        fecha:"",
        idconcepto:0,
        valororiginal:0,
        valorpendiente:0,
        idmoneda:1,
        idtitular:1,
        observacion:""
    };
    
    $.extend(iObj, pObj);
    var self = this;

    self.id = ko.observable(iObj.id);
    self.fecha = ko.observable(iObj.fecha);
    self.idconcepto = ko.observable(iObj.idconcepto);
    self.valororiginal = ko.observable(iObj.valororiginal);
    self.valorpendiente = ko.observable(iObj.valorpendiente);
    self.idmoneda = ko.observable(iObj.idmoneda);
    self.idtitular = ko.observable(iObj.idtitular);
    self.observacion = ko.observable(iObj.observacion);
}