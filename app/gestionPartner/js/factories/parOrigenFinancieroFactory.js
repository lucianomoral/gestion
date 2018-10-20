function parOrigenFinancieroFactory() {
    var self = this;

    self.getAll = function (){
        return $.ajax({
                    method: "GET",
                    data:{
                        classToCall: 'parOrigenFinancieroService',
                        methodToCall: 'getAllDetailed'
                    },
                    url: "../controller/mainController.php",
                });
    }

    self.create = function(json){
        return $.ajax({
                method: "GET",
                data:{
                    classToCall: 'novedadService',
                    methodToCall: 'create',
                    params: json
                },
                url: "../controller/mainController.php"
            });
    }

};
