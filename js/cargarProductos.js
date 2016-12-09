$("document").ready(function(){
    
    $("#idProd").focus().keydown(function(e){
        
        if(e.keyCode == 13){
        
            var parmCod = $("#idProd").val();
            
            $.getJSON("AJAX.buscarCodigos.php", {codProd: parmCod}, cargarDatosProd);
        
        }
        
    });
    
    $("#busqProd").keydown(function(e){
        
       if(e.keyCode == 13){

           var parmBusq = $("#busqProd").val();
           
           $.getJSON("AJAX.buscarProductos.php", {busqProd: parmBusq}, cargarComboProd);
           
       }
        
    });
    
    $("#nombreProd").bind("change keydown", function(e){
        
        if((e.type == "keydown" && e.keyCode == 13) || e.type == "change"){
            
            var parmBusq = $(this).val();
            
            $.getJSON("AJAX.buscarNombre.php", {"nombre": parmBusq}, obtenerDatosDesdeNombre);
            
        }
        
    });
    
    $("#precio, #cantPorBult").dblclick(function(){
        
        $(this).removeAttr("readonly");
        
        $(this).blur(function(){
            
            $(this).attr("readonly", true);
            
        })
    
    });
    
    $("#cant").keydown(function(e){
        
       if(e.keyCode == 13) {
           
           $("#total").val(calcularTotal()).focus();
           
       }
        
    });
    
    $("#total").keydown(function(e){
        
       if(e.keyCode == 13) {
           
            datosForm = $("form").serialize();
            var factura = $("#facturaParm").val();
            var idProd = $("#idProd").val();
            var precio = $("#precio").val();
            var cant;
           
            if($("#factPorBult").is(":checked")){
               
               cant = $("#cantPorBult").val() * $("#cant").val();
               
           } else {
               
               cant = $("#cant").val();
               
           }
           
           if(idProd == 0 || precio == 0 || cant == 0){
               
                alert("Falta completar precio o cantidad");
               
           } else {

                $.getJSON("AJAX.ingresarLinea.php", {"factura": factura, "idProd": idProd, "precio": precio, "cant": cant }, crearTablaPedido);

                $("#idProd").val("").focus();
                $("#busqProd").val("");
                $("#nombreProd").html("");
                $("#precio").val("");
                $("#cantPorBult").val("");
                $("#cant").val("");
                $("#total").val("");
               
           }
           
       }
        
    });
    
    $("#borrar").click(function(){
        
        var i = 0;
        
        $(".check").each(function(){
            
           if($(this).is(":checked")){
              
              i++;
              
            }; 
            
        });
        
        if(i > 0){
            
            datosABorrar = $("#facturaParm, .check").serialize();
            
            $.getJSON("AJAX.borrarLineas.php", datosABorrar, crearTablaPedido);
        
        } else {
            
            alert("No hay lineas marcadas.");
            
        }
            
    });
    
    $("#cerrar").click(function(){
        
        yesNo = confirm("Desea cerra la factura?");
        
        if(yesNo){
            
            document.forms[0].submit();
            
        } else {
            
            alert("Se canceló el cierre.");
            
        }
        
    });
    
});

function cargarComboProd(listadoProd){
    
    if (listadoProd == false){
        
        $("#nombreProd").html("");
        $("#busqProd").val("");
        $("#cantPorBult").val("");
        $("#precio").val("");
        $("#total").val("");
        $("#idProd").val("");
        $("#cant").val("");
        
        alert("No se encontró ningún resultado.");
        
    } else {
    
        $("#nombreProd").html(function(){

            var i = 0;
            var string = "";
            var cantFilas = listadoProd.length;

                for(i = 0; i < cantFilas;i++){

                   string +=  "<option>" + listadoProd[i] + "</option>";

                }

            $("#cantPorBult").val("");
            $("#precio").val("");
            $("#total").val("");
            $("#idProd").val("");
            $("#cant").val("");
            
            return string;
        
        }                      
        
    )};
}

function cargarDatosProd(datosProd){
    
    if (datosProd == false){
        
        $("#cantPorBult").val("");
        $("#idProd").val("");
        $("#busqProd").val("");
        $("#precio").val("");
        $("#total").val("");
        $("#nombreProd").html("");
        $("#cant").val("");
        alert("No se encontró ningún producto que coincida con el código ingresado.");
        
    } else {
        
        $("#busqProd").val(datosProd['Nombre']);
        
        if($("#margen").val() > 0)
        {
            $("#precio").val(
                
                Math.round(datosProd['Costo'] * (1 + ($("#margen").val() / 100)) * 100) / 100
                
            );
            
        } else {
        
            $("#precio").val(datosProd[$("#listaParm").val()]);
            
        }
        $("#cantPorBult").val(datosProd["CantidadBulto"]);
        $("#total").val("");
        $("#nombreProd").html("");
        $("#cant").val("").focus();
        
    }
    
}

function calcularTotal(){
    
    var total = 0;
    var cant = $("#cant").val();
    var precio = $("#precio").val();
    var cantPorBult = $("#cantPorBult").val();
    var factPorBult = $("#factPorBult").is(":checked");
    
    if(factPorBult == true){
        
        total = (cant * cantPorBult) * precio;
        
    } else {
        
        total = cant * precio;
        
    }
    
    total = Math.round(total*100) / 100;
    
    return total;
    
}

function crearTablaPedido(datosPedido){
    
    $("#tablaFact").html(function(){
        
        var tablaFact = "<table><tr><td><input type = 'checkbox' id = 'selectAll'></td><td>Código</td><td>Nombre</td><td>Cantidad</td><td>Precio</td><td>Total</td></tr>";
        
        if(datosPedido[0] == false){
            
            alert("La factura está vacía.");
            
        } else {
        
            for(var i = 0; i < datosPedido.length;i++){

                var d = datosPedido[i];

                tablaFact += "<tr><td><input type='checkbox' name ='" + i + "' class = 'check'></td><td>" + d.IdArticulo + "</td><td>" + d.Nombre + "</td><td>" + d.cantidad + "</td><td>$ " + d.precio + "</td><td>$ " + d.total + "</td></tr>";

            }

            tablaFact += "</table>";

            return tablaFact;
            
        }
        
    });
    
    $("#selectAll").bind("click", function(){
        
        if($(this).is(":checked")){
            
            checkAll(true);
                
        } else {
            
            checkAll(false);
            
        }
        
    });
        
}

function checkAll(pBoolean){
    
        $(".check").each(function(){

            $(this).prop("checked", pBoolean);

        });
    
}

function obtenerDatosDesdeNombre(datosProd){
    
    if (datosProd == false){
        
        $("#cantPorBult").val("");
        $("#idProd").val("");
        $("#busqProd").val("");
        $("#precio").val("");
        $("#total").val("");
        $("#cant").val("");
        $("#nombreProd").html("");
        alert("No se encontró ningún producto con ese nombre.");
        
    } else {
        
        $("#idProd").val(datosProd['IdArticulo']);
        $("#busqProd").val(datosProd['Nombre']);
        $("#precio").val(datosProd[$("#listaParm").val()]);
        $("#cantPorBult").val(datosProd["CantidadBulto"]);
        $("#total").val("");
        $("#nombreProd").html("");
        $("#cant").val("").focus();
        
    }
    
}