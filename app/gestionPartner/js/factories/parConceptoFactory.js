function parConceptoFactory() {
    var self = this;

    self.getAll = function (){
        return $.ajax({
                    method: "GET",
                    data:{
                        classToCall: 'parConceptoService',
                        methodToCall: 'getAllDetailed'
                    },
                    url: "../controller/mainController.php",
                });
    }

};
