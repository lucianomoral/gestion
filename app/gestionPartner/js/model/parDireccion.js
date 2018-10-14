function parDireccion(pObj) {
    var iObj = {
        id: 0, 
        direccion:"",
        barrio:"",
        provincia:""
    };
    
    $.extend(iObj, pObj);
    var self = this;

    self.id = ko.observable(iObj.id);
    self.direccion = ko.observable(iObj.direccion);
    self.barrio = ko.observable(iObj.barrio);
    self.provincia = ko.observable(iObj.provincia);
}