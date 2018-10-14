function parDireccionFactory() {
    var self = this;

    self.getAll = function (){
        return $.ajax({
                    method: "GET",
                    data:{
                        classToCall: 'parDireccionService',
                        methodToCall: 'getAll'
                    },
                    url: "../controller/mainController.php"
                });
    }

    self.create = function(json){
        return $.ajax({
                method: "GET",
                data:{
                    classToCall: 'parDireccionService',
                    methodToCall: 'create',
                    params: json
                },
                url: "../controller/mainController.php"
            });
    }

};
