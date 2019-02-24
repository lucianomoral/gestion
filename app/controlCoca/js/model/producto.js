function producto(pObj) {
    var iObj = {
        id: 0,
        nombre:"",
        rutafoto:"",
        idfamilia:0,
        stock:0,
    };

    $.extend(iObj, pObj);
    var self = this;

    self.id = ko.observable(iObj.id);
    self.nombre = ko.observable(iObj.nombre);
    self.rutafoto = ko.observable(iObj.rutafoto);
    self.idfamilia = ko.observable(iObj.idfamilia);
    self.stock = ko.observable(iObj.stock);
}
