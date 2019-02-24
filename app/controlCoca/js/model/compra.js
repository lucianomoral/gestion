function compra(pObj) {
    var iObj = {
        id: 0,
        idproveedor:0,
        fecha:"",
    };

    $.extend(iObj, pObj);
    var self = this;

    self.id = ko.observable(iObj.id);
    self.idproveedor = ko.observable(iObj.idproveedor);
    self.fecha = ko.observable(iObj.fecha);
}
