ko.components.register('botonera-loca', {
    viewModel: function(params) {
        var self = this;        
        self.Nuevo = params.Nuevo;
    },
    template: 
    '<div class="btn-group btn-group-justified">' +
        '<a href="#menu-toggle" class="btn btn-default" id="menu-toggle">' +
            '<span id = "hideshowmenu" class="glyphicon glyphicon-arrow-right"></span>' +
        '</a>' +
        '<a class="btn btn-success" data-bind="click: Nuevo">' +
            '<span class="glyphicon glyphicon-plus"></span> Nuevo' +
        '</a>' +
        /*'<a class="btn btn-danger">' +
            '<span class="glyphicon glyphicon-trash"></span> Eliminar' +
        '</a>' +
        '<a class="btn btn-info">' +
            '<span class="glyphicon glyphicon-floppy-saved"></span> Guardar' +
        '</a>' +*/
    '</div>' +
    '<script>' +
        '$("#menu-toggle").click(function(e) {' +
            'e.preventDefault();' +
            '$("#wrapper").toggleClass("toggled");' +
            'if ($("#hideshowmenu").hasClass("glyphicon-arrow-left")){' +
                '$("#hideshowmenu").removeClass("glyphicon-arrow-left").addClass("glyphicon-arrow-right");' +
            '} else {' + 
                '$("#hideshowmenu").removeClass("glyphicon-arrow-right").addClass("glyphicon-arrow-left");' +
            '}' +
        '});' +
    '</script>'
});