function productoCanasta(pObj) {
    var iObj = {
        id: 0,
        nombre:"",
        rutafoto:"",
        idfamilia:0,
        stock:0,
        cantidad: "", //Para que por default se muestre vacio y no un 0 y que el usuario tenga que borrar
        precio: 0
    };

    $.extend(iObj, pObj);
    var self = this;

    self.id = ko.observable(iObj.id);
    self.nombre = ko.observable(iObj.nombre);
    self.rutafoto = ko.observable(iObj.rutafoto);
    self.idfamilia = ko.observable(iObj.idfamilia);
    self.stock = ko.observable(iObj.stock);
    self.cantidad = ko.observable(iObj.cantidad);
    self.precio = ko.observable(iObj.precio);
}
