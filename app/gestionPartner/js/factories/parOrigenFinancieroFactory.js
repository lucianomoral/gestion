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

};
