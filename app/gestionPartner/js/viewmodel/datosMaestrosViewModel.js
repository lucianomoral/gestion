function datosMaestrosViewModel(){
    var self = this;

    self.datosMaestrosFactory = new datosMaestrosFactory();
    self.tablesArray = ko.observableArray();
    self.tableElegida = ko.observable("");
    self.tableHeader = ko.observableArray();
    self.tableBody = ko.observableArray();
    self.editMode = ko.observable(-1);
    self.data = ko.observableArray();
    self.prueba = ko.observable(3);

    self.mapData = function(data){

        self.data([]);

    };

    self.populateTable = function(data){

        self.tableHeader([]);
        self.tableBody([]);

        for(i = 0; i < data.length; i++)
        {
            if (i == 0)
            {
                Object.keys(data[i]).forEach(function(j)
                {
                    self.tableHeader.push(j);
                });

                self.tableHeader.push("Editar");
                self.tableHeader.push("Borrar");

            }
            
            var algo = ko.observableArray([]);

            $.each(Object.values(data[i]), function(k, elem){

                algo.push(ko.observable(elem));

            });

            self.tableBody.push(algo);

            //self.tableBody.push(Object.values(data[i]));

        }

    };

    self.ver = function(){
        self.datosMaestrosFactory.getTableContent(self.tableElegida()).done(function(data){
            data = Object.values(JSON.parse(data));
            self.populateTable(data);
        });
    };

    self.editar = function(value){

        self.editMode(value);

    };

    self.guardar = function(index){

        //console.log(self.tableBody()[index]());

        self.editMode(-1);

    }

    self.borrar = function(parm){

        console.log(parm);

    };  

    self.ready = function(){

        self.datosMaestrosFactory.getTables().done(function(data){
            data = JSON.parse(data);
            $.each(Object.keys(data), function(i, key){
                self.tablesArray.push(data[key].TABLE_NAME);
            });
        });

    };

    self.ready();

}

$(document).ready(function(){
    var div = $("#ko").get(0);
    ko.cleanNode(div);
    ko.applyBindings(new datosMaestrosViewModel(), div);
});