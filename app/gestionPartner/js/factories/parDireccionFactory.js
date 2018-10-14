function parDireccionFactory() {
    var self = this;

    self.getAll = function (){
        return $.ajax({
                    method: "GET",
                    data:{
                        classToCall: 'parDireccionService',
                        methodToCall: 'getAll'
                    },
                    url: "../controller/mainController.php",
                });
    }

};
