function FamiliaArticuloFactory() {
    var self = this;

    self.getAll = function (){
        return $.ajax({
                    method: "GET",
                    data:{
                        class: 'parDireccionService',
                        method: 'getAll'
                    },
                    url: "../controller/mainController.php"
                });
    }

    self.create = function(json){
        return $.ajax({
                method: "GET",
                data:{
                    class: 'FamiliaArticuloService',
                    method: 'create',
                    params: json
                },
                url: "../controller/mainController.php"
            });
    }

};
