function parOrigenFinancieroViewModel(){
    var self = this;
    self.factory = new parOrigenFinancieroFactory();
    self.array = ko.observableArray();

    self.ready = function(){
        self.factory.getAll().done(function(data){
            data = JSON.parse(data);
            $.each(Object.keys(data), function(i, key){
                self.array.push(new OrigenFinanciero(data[key]));
            });
            $("#formulario").collapse("hide");
            $("#contenido").collapse("show");
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
                if ($("#hideshowmenu").hasClass("glyphicon-arrow-left")){
                    $("#hideshowmenu").removeClass("glyphicon-arrow-left").addClass("glyphicon-arrow-right");
                } else {
                    $("#hideshowmenu").removeClass("glyphicon-arrow-right").addClass("glyphicon-arrow-left");
                }
            });
        });
    };

    self.Nuevo = function() {
        $("#contenido").collapse("hide");
        $("#formulario").collapse("show");

    };

    self.ready();
}

$(document).ready(function(){
	var div = $("#ko").get(0);
	ko.cleanNode(div);
    ko.applyBindings(new parOrigenFinancieroViewModel(), div);
});