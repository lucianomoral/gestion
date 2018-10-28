ko.components.register('botonera-loca', {
    viewModel: function(params) {
        var self = this;        
        self.Nuevo = params.Nuevo;

    },
    template: 
    '<div class="btn-group btn-group-justified">' +
        '<a href="#menu-toggle" class="btn btn-default" id="menu-toggle">' +
            '<span id = "hideshowmenu" class="glyphicon glyphicon-arrow-left"></span>' +
        '</a>' +
        '<a class="btn btn-success" data-bind="click: Nuevo">' +
            '<span class="glyphicon glyphicon-plus"></span> Nuevo' +
        '</a>' +
        /*'<a class="btn btn-danger">' +
            '<span class="glyphicon glyphicon-trash"></span> Eliminar' +
        '</a>' +
        '<a class="btn btn-info" data-bind="click: Cancelar">' +
            '<span class="glyphicon glyphicon-floppy-saved"></span> Guardar' +
        '</a>' +*/
    '</div>'
});