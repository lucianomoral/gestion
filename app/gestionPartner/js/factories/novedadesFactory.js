function novedadesFactory(){
    var self = this;

    self.getAll = function(){
        return $.ajax({
            method: "GET",
            url: "../controller/dataHandler.php"
        });
    }
}