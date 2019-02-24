function Envio(pObj) {
    var iObj = {
        id: 0,
        remito:"",
    };
    
    $.extend(iObj, pObj);
    var self = this;

    self.id = ko.observable(iObj.id);
    self.remito = ko.observable(iObj.remito);
}