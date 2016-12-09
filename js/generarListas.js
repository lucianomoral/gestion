$("document").ready(function(){
            
   $(".radio").click(function(){

       $(".radio").next().next().attr("disabled", true);
       $(this).next().next().attr("disabled", false);

   });
    
    $("#buscar").click(enviarParametrosBusq);
    
    $(".busqParm").keydown(function(e){
        
        if (e.keyCode == 13){
            
            enviarParametrosBusq();
            
            e.preventDefault();
            
        }
        
    });
    
    $("#agregar").click(function(){
        
        var cant = 0;
        var cantCheck = 0;
        
        $(".tableCheck").each(function(){
                
            if($(this).is(":checked")){
                
                cantCheck++;
                cant++;
                
            } else {
                
                cant++;
                
            }
            
        });
        
        if(cantCheck == 0){
            
            alert ("No se marcó ninguna linea para agregar.");
            
        } else if ($("#margen").val() == 0){
            
            alert ("Falta completar el margen.");
            
        } else {

            var idsAgregar = "cant=" + cant + "&";

            idsAgregar += $(".tableCheck, #idLista, #margen").serialize();

            $.getJSON("AJAX.listaIngresarBusqueda.php", idsAgregar, crearTablaLista);

        }
        
    });
    
    $("#eliminar").click(function(){
        
        var cantCheck = 0;
        var cant = 0;
        
        $(".listaCheck").each(function(){
                
            if($(this).is(":checked")){
                
                cantCheck++;
                cant++;
                
            }  else {
                
                cant++;
                
            }
            
        });
        
        if(cantCheck == 0){
            
            alert ("No se marcó ninguna linea para eliminar.");
            
        } else {
            
            var idsEliminar = "cant=" + cant + "&";
            
            idsEliminar += $(".listaCheck, #idLista").serialize();
            
            $.getJSON("AJAX.listaEliminarItem.php", idsEliminar, crearTablaLista);

        }
        
        
    });
    
    $("#pdf").click(function(){
        
        window.open("PDF.lista.php?lista=" + $("#idLista").val() + "&listaDesc=" + $("#listaDesc").val());
        
    });

});

function enviarParametrosBusq(){
    
    var JSON = $(".busqParm").serialize();
            
    $.getJSON("AJAX.listaBusqueda.php", JSON, crearTablaListaBusq);
    
}

function crearTablaListaBusq (datos){
    
    if(!datos){
        
        $("#tablaResultados").html("");
        alert ("No se encontró ningún resultado.");
        
    } else {
    
        var tableContent = "<tr><th><input type = 'checkbox' id = 'selectAll'></th><th>Id.</th><th>Nombre</th></tr>";
        for(var i = 0; i < datos.length;i++){

            tableContent += "<tr><td><input class = 'tableCheck' type = 'checkbox' name = '" + i + "' value=" + datos[i].IdArticulo + "></td><td>" + datos[i].IdArticulo + "</td><td>" + datos[i].Nombre + "</td></tr>";

        }
        
        //cargarEventoCheckAll(".tableCheck");
        
        $("#tablaResultados").html(tableContent);
        
        cargarEventoCheckAll(".tableCheck");
        
    }
    
}

function crearTablaLista(datos){
    
    var tableContent = "";
    
    if(datos == false){
    
        tableContent = "Lista vacía.";
        
    } else {
        
        tableContent = "<tr><th><input type = 'checkbox' id = 'selectAll'></th><th>Id.</th><th>Nombre</th><th>Precio</th></tr>";
        for(var i = 0; i < datos.length;i++){

            tableContent += "<tr><td><input class = 'listaCheck' name = '" + i + "' type = 'checkbox' value = '" + datos[i].idArticulo + "' value=" + datos[i].idArticulo + "></td><td>" + datos[i].idArticulo + "</td><td>" + datos[i].Nombre +"</td><td>$ " + datos[i].Precio +"</td></tr>";

        }
        
    }
        
    $("#tablaLista").html(tableContent);
    
    $("#tablaResultados").html("");
    
    cargarEventoCheckAll(".listaCheck");
    
}

function cargarEventoCheckAll(classCheck){
    
    $("#selectAll").bind("click", function(){
        
        if($(this).is(":checked")){
            
            checkAll(true, classCheck);
                
        } else {
            
            checkAll(false, classCheck);
            
        }
        
    });
    
}

function checkAll(pBoolean, classCheck){
    
        $(classCheck).each(function(){

            $(this).prop("checked", pBoolean);

        });

}