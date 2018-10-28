function homeFactory() {
    var self = this;

    self.getNovedadesPorMes = function(){
        return $.ajax({
            method: "GET",
            data:{
                classToCall: 'homeService',
                methodToCall: 'getNovedadesPorMes'
            },
            url: "../controller/mainController.php",
        });
    };

    self.getCajas = function(){
        return $.ajax({
            method: "GET",
            data:{
                classToCall: 'parCajaService',
                methodToCall: 'getAll'
            },
            url: "../controller/mainController.php",
        });
    };

}