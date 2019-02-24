function Stock(pObj) {
    var iObj = {
        id: 0,
        idSucursal:0,
        idArticulo:0,
        stock:0.1,
    };
    
    $.extend(iObj, pObj);
    var self = this;

    self.id = ko.observable(iObj.id);
    self.idSucursal = ko.observable(iObj.idSucursal);
    self.idArticulo = ko.observable(iObj.idArticulo);
    self.stock = ko.observable(iObj.stock);
}