function MovimientoStock(pObj) {
    var iObj = {
        id: 0,
        idSucursal:0,
        idArticulo:0,
        cantidad:0.1,
        remito:""
    };
    
    $.extend(iObj, pObj);
    var self = this;

    self.id = ko.observable(iObj.id);
    self.idSucursal = ko.observable(iObj.idSucursal);
    self.idArticulo = ko.observable(iObj.idArticulo);
    self.cantidad = ko.observable(iObj.cantidad);
    self.remito = ko.observable(iObj.remito);
}