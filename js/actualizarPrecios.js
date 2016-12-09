var modal;
var fila;

$(document).ready(function(){
    
    $("#codiProd").focus().keydown(function(e){
        
        if (e.keyCode == 13){
            
            if ($(this).val() == ""){
                
                alert("Completar código de producto.");
                
            } else {
                
                var idProd = $(this).serialize();
                
                $.getJSON("AJAX.cargarUltimosPrecios.php", idProd, crearTablaPrecios);
                
            }
            
        }
        
        
    });
    
    $("#nombreProd").keydown(function(e){
       
        if(e.keyCode == 13){
            
            if($(this).val() == ""){
                
                alert("Completar nombre de producto.");
                
            } else {
                
                var nombreProd = $(this).serialize();
                
                $.getJSON("AJAX.cargarUltimosPrecios.php", nombreProd, crearTablaPrecios);
         
            }
            
        }
        
    });

    // Get the modal
    modal = document.getElementById('divActualizaPrecios');

    // Get the button that opens the modal
    //var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("cerrar")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {

            modal.style.display = "none";

        }

    }
    
    $("#guardar").click(function(){
        
        if($("#idProd").val() == "" || 
           $("#costoArt").val() == 0 || 
           $("#lista6Art").val() == 0 || 
           $("#lista10Art").val() == 0){
           
            alert ("Faltan completar datos.");
            
        } else if ($("#fecha") == ""){
            
            alert("Falta completar fecha.");
            
        } else {
            
            datosPrecio = $("#idProd, #costoArt, #lista6Art, #lista10Art, #fecha").serialize();
            
            $.getJSON("AJAX.actualizarPrecio.php", datosPrecio, actualizarPrecioActualizado);
            
        }
        
    });
    
});

function crearTablaPrecios(datos){
    
    if(datos == false || datos.length == 0){
        
        alert("No se encontró ningún producto.");
        
    } else {
    
        $(".lineas").remove();

        var prevItem = "";
        var i = 0;
        var numFila = 1;
        var cont = datos.length;

        for(i;i < cont; i++){

            if(prevItem == datos[i].IdArticulo){

                prevItem = datos[i].IdArticulo;

            } else {

                prevItem = datos[i].IdArticulo;

                $("#tableUltimosPrecios").append("<tr class = 'lineas' name=" + numFila + 
                                     "><td>" + datos[i].IdArticulo + 
                                     "</td><td>" + datos[i].Nombre + 
                                     "</td><td>" + "$ " + datos[i].Costo + 
                                     "</td><td>" + "$ " + datos[i].Lista6 + 
                                     "</td><td>" + "$ " + datos[i].Lista10 + 
                                     "</td><td>" + datos[i].Fecha + 
                                     "</td></tr>");

                numFila++;       

            }

        }
        
    }
    
    cargarEventoClickLineasModal();
    
}

function cargarEventoClickLineasModal(){
    
    $(".lineas").click(function(e){
        
        fila = $(this).attr('name');
        
        var codProd = $("tr[name=" + fila + "] > td:nth-child(1)").html();
        var nombreProd = $("tr[name=" + fila + "] > td:nth-child(2)").html();
        var costo = $("tr[name=" + fila + "] > td:nth-child(3)").html();
        var lista6 = $("tr[name=" + fila + "] > td:nth-child(4)").html();
        var lista10 = $("tr[name=" + fila + "] > td:nth-child(5)").html();
        var fecha = $("tr[name=" + fila + "] > td:nth-child(6)").html();
            
        costo = costo.substring(2, costo.length);
        lista6 = lista6.substring(2, lista6.length);
        lista10 = lista10.substring(2, lista10.length);

        modal.style.display = "block";
        
        $("#idProd").val(codProd);
        $("#nombreArt").val(nombreProd);
        $("#costoArt").val(costo);
        $("#lista6Art").val(lista6);
        $("#lista10Art").val(lista10);
        $("#fecha").val(fecha);
        
    });
    
}

function actualizarPrecioActualizado(datos){
    
    modal.style.display = "none";
    
    $("tr[name=" + fila + "] > td:nth-child(3)").html("$ " + datos.Costo);
    $("tr[name=" + fila + "] > td:nth-child(4)").html("$ " + datos.Lista6);
    $("tr[name=" + fila + "] > td:nth-child(5)").html("$ " + datos.Lista10);
    $("tr[name=" + fila + "] > td:nth-child(6)").html(datos.Fecha);
    
}