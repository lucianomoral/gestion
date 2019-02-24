function datosMaestrosFactory() {

    var self = this;

    self.getTables = function(){
        return $.ajax({
            method: "GET",
            data:{
                classToCall: 'dataHandler',
                methodToCall: 'getAllTables'
            },
            url: "../controller/mainController.php"
        });

    };

    self.getTableContent = function(tableName){
        return $.ajax({
            method: "GET",
            data:{
                classToCall: 'dataHandler',
                methodToCall: 'getAll',
                params: tableName
            },
            url: "../controller/mainController.php"
        });

    };

}