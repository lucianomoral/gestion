function pedido(pObj) {
    var iObj = {
        id: 0,
        fechaentrega: "",
        nombre:"",
        direccion:""
    };

    $.extend(iObj, pObj);
    var self = this;

    self.id = ko.observable(iObj.id);
    self.fechaentrega = ko.observable(iObj.fechaentrega);
    self.nombre = ko.observable(iObj.nombre);
    self.direccion = ko.observable(iObj.direccion);
}
