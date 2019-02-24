function Articulo(pObj) {
    var iObj = {
        id: 0,
        nombre:"",
        idFamiliaArticulo:0
    };
    
    $.extend(iObj, pObj);
    var self = this;

    self.id = ko.observable(iObj.id);
    self.nombre = ko.observable(iObj.nombre);
    self.idFamiliaArticulo = ko.observable(iObj.idFamiliaArticulo);
}