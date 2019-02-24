function EnvioLinea(pObj) {
    var iObj = {
        id: 0,
        idEnvio:0,
        idArticulo:0,
        cantidad: 0.1,
        observacion:""
    };
    
    $.extend(iObj, pObj);
    var self = this;

    self.id = ko.observable(iObj.id);
    self.idEnvio = ko.observable(iObj.idEnvio);
    self.idArticulo = ko.observable(iObj.idArticulo);
    self.cantidad = ko.observable(iObj.cantidad);
    self.observacion = ko.observable(iObj.observacion);
}