function OrigenFinanciero(pObj) {
    var iObj = {
        id: 0, 
        fecha:"",
        nombre_dia:"",
        nombre_concepto:"",
        nombre_tipo:"",
        valororiginal:"",
        valorpendiente:"",
        nombre_moneda:""
    };
    
    $.extend(iObj, pObj);
    var self = this;

    self.id = ko.observable(iObj.id);
    self.fecha = ko.observable(iObj.fecha);
    self.nombre_dia = ko.observable(iObj.nombre_dia);
    self.nombre_concepto = ko.observable(iObj.nombre_concepto);
    self.nombre_tipo = ko.observable(iObj.nombre_tipo);
    self.valororiginal = ko.observable(iObj.valororiginal);
    self.valorpendiente = ko.observable(iObj.valorpendiente);
    self.nombre_moneda = ko.observable(iObj.nombre_moneda);

}