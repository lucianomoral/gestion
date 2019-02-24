function proveedor(pObj) {
    var iObj = {
        id: 0,
        nombre:"",
        direccion:"",
    };

    $.extend(iObj, pObj);
    var self = this;

    self.id = ko.observable(iObj.id);
    self.nombre = ko.observable(iObj.nombre);
    self.direccion = ko.observable(iObj.direccion);
}
