function novedadesFactory(){
    var self = this;

    self.getAll = function(){
        return $.ajax({
            method: "GET",
            url: "js/app/factories/dataHandler.php"
        });
    }
}