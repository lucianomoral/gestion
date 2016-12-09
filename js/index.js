$(document).ready(function(){
    
    $("h3, input, label").hide().fadeIn(2000);
    
    $("input").focus(function(){
        
       $(this).css({"background-color": "rgba(240,0,0,0.5)"});
        
        $("#validador").html("");
        
    });
    
    $("input").blur(function(){
        
       $(this).css("background-color", "white");
        
        $("#validador").html("");
        
    });
    
    $("form").submit(function(){
        
        var datosUsuario = $(this).serialize();
        
        $.get("AJAX.login.php", datosUsuario, aceptarDenegarLogin);
        
        return false;
        
    });
    
});

function aceptarDenegarLogin(respuesta){
    
    if(respuesta == 1){
        
        $("form").attr("action","main.php");
        
        document.forms[0].submit();
        
    } else {
        
        $("#validador").html("Usuario o contraseña incorrectos.");
        
    }
    
    
}