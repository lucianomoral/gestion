function parMovimientoFinancieroFactory() {
    var self = this;

    self.getPending = function (){
        return $.ajax({
                    method: "GET",
                    data:{
                        classToCall: 'parMovimientoFinancieroService',
                        methodToCall: 'getPending'
                    },
                    url: "../controller/mainController.php",
                });
    }

    self.getCajas = function(){
        return $.ajax({
            method: "GET",
            data:{
                classToCall: 'parCajaService',
                methodToCall: 'getAll'
            },
            url: "../controller/mainController.php",
        });
    }

    self.collect = function(json){
        return $.ajax({
                method: "GET",
                data:{
                    classToCall: 'movimientoFondosService',
                    methodToCall: 'collect',
                    params: json
                },
                url: "../controller/mainController.php"
            });
    }

    self.save = function(json){
        return $.ajax({
                method: "GET",
                data:{
                    classToCall: 'movimientoFondosService',
                    methodToCall: 'save',
                    params: json
                },
                url: "../controller/mainController.php"
            });
    }

};