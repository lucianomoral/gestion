function parTipoConceptoFactory() {
    var self = this;

    self.getAll = function (){
        return $.ajax({
                    method: "GET",
                    url: "../controller/dataHandler.php",
                });
    }

};

function parTipoConceptoViewModel(){
    var self = this;
    self.factory = new parTipoConceptoFactory();
    self.array = ko.observableArray();

    self.ready = function(){
        self.factory.getAll().done(function(data){
            data = JSON.parse(data);
            $.each(Object.keys(data), function(i, key){
                self.array.push(data[key]);
            });
        })
    }

    self.ready();
}

$(document).ready(function(){
	var div = $("#ko").get(0);
	ko.cleanNode(div);
    ko.applyBindings(new parTipoConceptoViewModel(), div);
});