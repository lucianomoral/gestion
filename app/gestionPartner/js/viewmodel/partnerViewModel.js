function partnerViewModel(){
	var self = this;

	self.valor = ko.observable("JAJAJA");

	self.ready = function(){

	}

	self.mostrarObservable = function() {
		console.log(self.valor());
	}

	self.ready();

}

$(document).ready(function(){
	var div = $("#ko").get(0);
	ko.cleanNode(div);
	ko.applyBindings(new partnerViewModel(), div);
});