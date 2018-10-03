function novedadesViewModel(){
	var self = this;
    self.factory = new novedadesFactory();
    self.array = ko.observableArray();

	self.ready = function(){
        self.factory.getAll().done(function(data){
            data = JSON.parse(data);
            $.each(Object.keys(data), function(i, key){
                console.log(data[key]);
                self.array.push(new novedad(data[key]));
            });
        });
	}

    self.prueba = function(){
        self.array.push(new novedad({nombre: "juan"}));
    }

    self.borrar = function() {
        self.array.remove(self.array()[0]); 

    }

	self.ready();

}

$(document).ready(function(){
	var div = $("#ko").get(0);
	ko.cleanNode(div);
    ko.applyBindings(new novedadesViewModel(), div);
});