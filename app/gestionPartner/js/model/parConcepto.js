function parConcepto(pObj) {
    var iObj = {
        id: 0, 
        nombreconcepto:"",
        idtipoconcepto:0,
        nombretipoconcepto:"",
        valorpredeterminado:0,
        cobradoeneldiapredeterminado:0,
        idclaseconcepto:0,
        nombreclaseconcepto:""
    };
    
    $.extend(iObj, pObj);
    var self = this;

    self.id = ko.observable(iObj.id);
    self.nombreconcepto = ko.observable(iObj.nombreconcepto);
    self.idtipoconcepto = ko.observable(iObj.idtipoconcepto);
    self.nombretipoconcepto = ko.observable(iObj.nombretipoconcepto);
    self.valorpredeterminado = ko.observable(iObj.valorpredeterminado);
    self.cobradoeneldiapredeterminado = ko.observable(iObj.cobradoeneldiapredeterminado);
    self.idclaseconcepto = ko.observable(iObj.idclaseconcepto);
    self.nombreclaseconcepto = ko.observable(iObj.nombreclaseconcepto);
}