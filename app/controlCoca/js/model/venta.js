function venta(pObj) {
    var iObj = {
        id: 0,
        idcliente:0,
        fecha:"",
    };

    $.extend(iObj, pObj);
    var self = this;

    self.id = ko.observable(iObj.id);
    self.idcliente = ko.observable(iObj.idcliente);
    self.fecha = ko.observable(iObj.fecha);
}
