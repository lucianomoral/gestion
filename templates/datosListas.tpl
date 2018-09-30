<!DOCTYPE>
<html>
<head>

    <title>Generar listas</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="estilos/estilos.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    
    <script>
    
        $("document").ready(function(){
        
            $("form").submit(function(){

                if($("#listaDesc").val() == ""){

                    alert("Completar descripción.");

                    return false;

                }

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

<section class="query">
<div id="generarLista">

<form action="generarListas.php" method="get">
   
    <label for="descripcion" class="labelGral">Descripcion: </label><input type="text" name="listaDesc" id="listaDesc" autocomplete = "off"><br><br>
    <input type="submit" value="Agregar"><br><br>
    <a href = "listas.php"><input type="button" value="Volver"></a><br><br>
    
</form>

</div>        
    
</section>

<div class="separador"></div>

<footer id="pie">Desarrollado por Luciano Moral</footer>

</body>
</html>