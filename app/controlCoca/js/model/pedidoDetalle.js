//Es un movimientostock con el nombreproducto como campo extra
function pedidoDetalle(pObj) {
    var iObj = {
        id: 0,
        idmovimientoreferencia:0,
        tipooperacion:"",
        cantidad:0,
        idproducto:0,
        nombreproducto: "",
        stockimpactado: 0,
        precioun : 0
    };

    $.extend(iObj, pObj);
    var self = this;

    self.id = ko.observable(iObj.id);
    self.idmovimientoreferencia = ko.observable(iObj.idmovimientoreferencia);
    self.tipooperacion = ko.observable(iObj.tipooperacion);
    self.cantidad = ko.observable(iObj.cantidad);
    self.idproducto = ko.observable(iObj.idproducto);
    self.nombreproducto = ko.observable(iObj.nombreproducto);
    self.stockimpactado = ko.observable(iObj.stockimpactado);
    self.precioun = ko.observable(iObj.precioun);
}
