<!DOCTYPE>
<html>
<head>

    <title>Generar pedidos de compra</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="estilos/estilos.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    
    <script>
        
        $("document").ready(function(){

            $("#buscar").click(function(){
                
                $.getJSON("AJAX.buscarLineasPlantillasCompras.php", 
                            {
                            IdProv: $("#prov").val()
                            },
                            crearTablaLista
                );
            
            });

            $("#finalizar").click(function(){

                $.get("AJAX.crearPedidoYMail.php", 
                            {
                                IdProv: $("#prov").val()
                            },
                            function(){}
                );

            });

        });

        function crearTablaLista(datos){

            var tableContent = "";
            
            if(datos == false){
            
                tableContent = "No se encontraron lineas en la plantilla.";
                
            } else {
                
                tableContent = "<tr><th>Descripción</th><th>Cantidad</th></tr>";//<th>Precio</th><th>Total</th></tr>";
                for(var i = 0; i < datos.length;i++){

                    tableContent += "<tr><td>" + datos[i].DescArt + "</td><td><input class='editInput' type='number' value='" 
                                                + datos[i].Cantidad + "'></td></tr>";//<td>"
                                                /*$ " 
                                                + datos[i].Precio +"</td><td>$ " 
                                                + datos[i].Cantidad * datos[i].Precio 
                                    + "</td></tr>"*/

                }

            }

            $("#tablaPlantilla").html(tableContent);

        }
    
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

<section class="query">

<div id="botonesBusq">
<label class = "labelGral" for="">Proveedor: </label><select name="prov" id="prov" class = "busqParm">
    
    {section name = proveedores loop = $proveedores}
        <option value = {$proveedores[proveedores].IdProveedor}>{$proveedores[proveedores].Nombre}</option>
    {/section}
    
</select><br><br>
<input type="button" value = "Buscar" id="buscar"><br><br>
<input type="button" value = "Finalizar" id="finalizar"><br><br>
<a href = "proveedores.php"><input type="button" value = "Volver"></a>

</div>
       
<div id="divTablaPlantilla">

    <table id = "tablaPlantilla"></table>

</div>

</section>

<div class="separador"></div>

<footer id="pie">Desarrollado por Luciano Moral</footer>

</body>
</html>