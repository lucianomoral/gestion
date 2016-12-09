$(document).ready(function(){
    
  $("#confirmar").click(bloquearBoton);
    
});

function desbloquearBoton(){
        
    $("#cliente, #lista").attr("disabled", false).css("color", "white");
    
    $("#descripcion").attr("disabled", true);
    
    $("#habilitar, #generarPedido").remove();
    
    $("#divBotones").html("<input type = 'button' value = 'Confirmar' id = 'confirmar' onClick = 'bloquearBoton()'>");
    
    $("#facturasAbiertas").html("");
        
};

function bloquearBoton(){
      
    $("#cliente, #lista").attr("disabled", true).css("color", "black");
    
    $("#descripcion").attr("disabled", false);

    $("#confirmar").remove();
    
    $("#divBotones").html("<input type = 'button' value = 'Cambiar cliente o lista' id = 'habilitar' onClick='desbloquearBoton()'><br><br>" +
                            "<input type = 'button' value = 'Generar pedido' id = 'generarPedido' onClick='enviarForm()'><br><br>" + 
                         "<input type = 'button' value = 'Mostrar abiertos' id = 'pedidosAbiertos'>");
    
    $("#pedidosAbiertos").click(function(){
        
        var cliente = $("#cliente").val();
        
        $.getJSON("AJAX.cargarAbiertos.php", {"cliente": cliente}, cargarAbiertos);
        
    });
        
};

function enviarForm(){
    
    $("#cliente, #lista").attr("disabled", false);
    
    document.forms[0].submit();
    
}

function cargarAbiertos(facturasAbiertas){
    
    var options = "";
    
    for(var i = 0; i < facturasAbiertas.length; i++){
        
        options += "<option>" + facturasAbiertas[i] +"</option>";
        
    }
    
    if(options !== ""){
    
        $("#facturasAbiertas").html("<label class='labelGral'>Facturas abiertas: </label><select name='factAbiertas' id='factAbiertas'>" + options + "</select><br><br>");
        
        $("#factAbiertas").css("color", "black");
        
    }
    
}