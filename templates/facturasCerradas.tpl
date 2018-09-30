<!DOCTYPE>
<html>
<head>

    <title>Facturas cerradas</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="estilos/estilos.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    
    <script>
    
        $("document").ready(function(){
            
            $("#filtrarPorCliente").click(function(){
                
                if($("#clientes").attr("disabled") == "disabled"){
                    
                    $("#clientes").attr("disabled", false);
                   
                } else {
                   
                    $("#clientes").attr("disabled", true);
                   
                }
                
            });
            
            $("#generar").click(function(){
               
                window.open("SQL.reporteFactura.php?factura=" + $("#facturasCerradas").val());
                
            });
            
            $("#filtrar").click(function(){
                
                if($("#clientes").attr("disabled") == "disabled"){
                    
                    alert("No hay cliente marcado para filtrar.");
                    
                } else {
                    
                    var clienteFiltro = $("#clientes").val();
                    
                    var cantFact = 0;
                    
                    $("#facturasCerradas option").each(function(){
                        
                        if ($(this).attr("name") != clienteFiltro){
                            
                            $(this).css("display", "none");
                            
                            $(this).removeAttr("selected");
                            
                        } else {
                            
                            $(this).css("display", "block");
                            
                            $(this).attr("selected", true);
                            
                            cantFact++;
                            
                        }
                        
                    });
                    
                    if (cantFact == 0){
                            
                         $("#facturasCerradas option").css("display", "block").removeAttr("selected");
                            
                            alert("Ninguna factura para el cliente.");
                            
                        }
                        
                }
                
            });
            
            $("#eliminarFiltro").click(function(){
                
                $("#facturasCerradas option").css("display", "block").removeAttr("selected");
                    
            });
            
        });
    
    </script>
    
</head>
<body>

<header><h1 class="encabezado">Gestión Kiosco</h1></header>

<nav>
    
    <table class="menuPrincipal">
        <tr>
            <td class = "menuItem"><a href="generarPedidos.php" class = "menuLink">Generar pedidos</a></td>
            <td class = "menuItem"><a href="listas.php" class = "menuLink">Generar listas</a></td>
            <td class = "menuItem"><a href="precios.php" class = "menuLink">Precios</a></td>
            <td class = "menuItem"><a href="productos.php" class = "menuLink">Productos</a></td>
            <td class = "menuItem"><a href="clientes.php" class = "menuLink">Clientes</a></td>
            <td class = "menuItem"><a href="proveedores.php" class = "menuLink">Proveedores</a></td>
            <td class = "menuItem"><a href="listadoConsultas.php" class = "menuLink">Reportes / consultas</a></td>
        </tr>
    </table>
    
</nav>

<div class="separador"></div>

<section class="">
    <div id="divFacturasCerradas">
        <label for="clientes" class="labelGral">Clientes: </label><br>
        <input type="checkbox" id="filtrarPorCliente">
        <select id = 'clientes' disabled>
            {foreach item = C from = $clientes}
            <option value = '{$C.IdCliente}'>{$C.Nombre}</option>
            {/foreach}
        </select>&nbsp;
        <button id="filtrar"><img src="imgs/lupa.png" width="15px"></button>&nbsp;
        <button id="eliminarFiltro"><img src="imgs/Delete.png" width="15px"></button>
           <br><br>
            
        <label for="facturasCerradas" class="labelGral">Facturas cerradas: </label><br>
            <select name="facturasCerradas" id="facturasCerradas">
                {foreach item=FC from=$facturasCerradas}
                <option value = '{$FC.IdFactura}' name = "{$FC.IdCliente}"> {$FC.IdFactura} - {$FC.Nombre} - {$FC.Descripcion}</option>
                {/foreach}
            </select>
        <br><br>
        <input type="button" value="Generar" id="generar"><br><br>
        <a href="listadoConsultas.php"><input type="button" value="Volver"></a><br><br>
    </div>
</section>
<div class="separador"></div>

<footer id="pie">Desarrollado por Luciano Moral</footer>

</body>
</html>