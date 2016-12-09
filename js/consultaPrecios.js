$("document").ready(function(){
    
    $("#idProd").keydown(function(e){
        
        if(e.keyCode == 13){
            
            consultarPrecio();
            
        }
        
    });
    
    $("#nombre").keydown(function(e){
        
        if(e.keyCode == 13){
            
            consultarPrecio();
            
        }
        
    });
    
    $("#margen").focus().keydown(function(e){
        
        if(e.keyCode == 13){
            
            consultarPrecio();
            
        }
        
        
    });
    
    $("#limpiar").click(function(){
        
        $("#tablaConsultaPrecios").html("");
        $("#margen, #nombre, #idProd").val("");
        
    });
    
    $("#buscar").click(consultarPrecio);
    
    /*$("#exportar").click(function() {

        var uri = "data:application/vnd.ms-excel, " + encodeURIComponent($('#tabla').html());

        window.open(uri);
        
        e.preventDefault();

        var reporte = $("#tabla").html();

        window.open("reportePDF.php?reporte=" + reporte);
            
    });*/
        
    $(".check").click(function(){

        $(".check").each(function(){
            
            if($(this).is(":checked")){

                $(this).next().next().attr("disabled", false);
                
                $(this).next().next().val("");

            } else {

                $(this).next().next().attr("disabled", true);
                
                $(this).next().next().val("");

            }            
            
        });   

    });

});

function consultarPrecio(){
        
        var margen = $("#margen");
        var nombre = $("#nombre");
        var idProd = $("#idProd");
    
        if(margen.val() == ""){
        
            alert ("Completar margen.");
            
        } else if (nombre.attr("disabled") == "disabled" && idProd.attr("disabled") == "disabled") {
            
            alert("Habilitar o el código o el nombre.");
            
        } else if (nombre.attr("disabled") == undefined && nombre.val() == ""){
            
            alert ("Falta completar el nombre.");
            
        } else if (idProd.attr("disabled") == undefined && idProd.val() == 0){
            
            alert ("Falta completar el código.");
            
        } else {
            
            datos = $("#idProd, #nombre").serialize();
            
            $.getJSON("AJAX.consultaPrecios.php", datos, crearTablaPrecios);
        
        }
        
}

function crearTablaPrecios(datosPrecios){
    
    if (datosPrecios != false){
    
        $("#tablaConsultaPrecios").html(function(){

            var tableRows = "";

            var margen = $("#margen").val()

            tableRows = "<tr><td>Nombre</td><td>Costo</td><td>Margen " + margen + "%</td></tr>";

            for(var i = 0; i < datosPrecios.length; i++){

                tableRows += "<tr><td>" + datosPrecios[i].Nombre + "</td><td>$ " + datosPrecios[i].Costo + "</td><td>$ " + (Math.round((datosPrecios[i].Costo * (1 + (margen / 100))) * 100) / 100) + "</td></tr>"

            }

            return tableRows;        

        });
        
    } else {
        
        $("#tablaConsultaPrecios").html("");
        alert("No se encontró ningún producto.");
        
    }
    
}