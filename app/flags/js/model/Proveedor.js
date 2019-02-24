function Proveedor(pObj) {
    var iObj = {
        id: 0,
        nombre:"",
    };
    
    $.extend(iObj, pObj);
    var self = this;

    self.id = ko.observable(iObj.id);
    self.nombre = ko.observable(iObj.nombre);
}