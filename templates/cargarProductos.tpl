<!DOCTYPE>
<html>
<head>

    <title>Cargar lineas de pedido</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="estilos/estilos.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <script src="js/cargarProductos.js"></script>
    
    <script>
    
        $("document").ready(function(){
            
            var datos = $("#facturaParm").serialize();
            
            $.getJSON("AJAX.buscarFactura.php", datos, crearTablaPedido);
            
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

<section>
  <form action="cerrarFactura.php" method="get" name="datosProd">
       <div id="divZonaIzq">

            <label for="cliente" class="labelBloq">Cliente:</label>&nbsp;<input type="text" value = {$cliente} name="cliente" class = "inputBloqueado" readonly><br><br>
            <label for="lista" class="labelBloq">Lista:</label>&nbsp;<input type="text" value = {$lista} name = "lista" class = "inputBloqueado" id = "listaParm" readonly><br><br>
            <label for="factura" class="labelBloq">Factura:</label>&nbsp;<input type="text" value = {$factura} name="factura" class = "inputBloqueado" id = "facturaParm" readonly><br><br>
            <label for="margen" class="labelBloq">Margen:</label>&nbsp;<input type="number" name="margen" class = "inputBloqueado" id = "margen"><br><br>

            <label for="idProd" class="labelGral">Código de artículo</label><br><input type="number" name="idProd" id="idProd"><br><br>
            <label for="busqProd" class="labelGral">Nombre de artículo</label><br><input type="text" name="busqProd" id="busqProd" autocomplete="off"><br>
            <select name="nombreProd" id="nombreProd"></select><br><br>

            <input type="button" value="Borrar lineas" id="borrar"><br><br>
            <input type="button" value="Editar"><br><br>
            <input type="button" value="Cerrar" id="cerrar"><br><br>
            <a href = "generarPedidos.php"><input type="button" value="Volver" id="cerrar"></a><br><br>
            
        </div>
        <div id="precioCant">
        
            <label class = "labelGral" for="precio">Precio: </label><br><input type="number" name="precio" id = "precio" readonly><br><br>
            <label class = "labelGral" for="cantPorBult">Cant. por Bult.: </label><input type="checkbox" name="factPorBult" id="factPorBult" checked><br><input type="number" name="cantPorBult" id="cantPorBult" readonly><br><br>
            <label class = "labelGral" for="cant">Cantidad: </label><br><input type="number" name="cant" id="cant"><br><br>
            <label class = "labelGral" for="total">Total: </label><br><input type="number" name="total" id="total"><br><br>
        
        </div>
        <div id="tablaFact"></div>
    </form>
</section>

<div class="separador"></div>

<footer id="pie">Desarrollado por Luciano Moral</footer>

</body>
</html>