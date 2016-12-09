<!DOCTYPE>
<html>
<head>

    <title>Generar listas</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="estilos/estilos.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    
    <script src="js/generarListas.js"></script>
    
    <script>
    
    $("document").ready(function(){
        
        var datos = $("#idLista").serialize();
        
        $.getJSON("AJAX.buscarLista.php", datos, crearTablaLista);
        
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
            <td class = "menuItem"><a href="listadoConsultas.php" class = "menuLink">Reportes / consultas</a></td>
        </tr>
    </table>
    
</nav>

<div class="separador"></div>

<section class="query">
<div id="botonesBusq">
<label for="lista" class="labelGral">Id. Lista: </label><input type="text" name = "lista" class = "inputBloqueado" value = {$idLista} id = "idLista" readonly><br><br>
<label for="listaDesc" class="labelGral">Descripcion: </label><input type="text" name = "listaDesc" class = "inputBloqueado" value = '{$listaDesc}' id = 'listaDesc' readonly><br><br>
<label for="margen" class="labelGral">Margen: </label><input type="number" name = "margen" id="margen"><br><br>
<input type="radio" name = "buscador" class="radio"><label class = "labelGral" for="">Familia: </label><select name="familia" id="familia" class = "busqParm" disabled>
    
    {section name = familia loop = $familia}
    <option>{$familia[familia]}</option>
    {/section}
    
</select><br><br>
<input type="radio" name = "buscador" class="radio"><label class = "labelGral" for="">Grupo: </label><select name="grupo" id="grupo" class = "busqParm" disabled>
    
    {section name = grupo loop = $grupo}
    <option>{$grupo[grupo]}</option>
    {/section}
    
</select><br><br>
<input type="radio" name = "buscador" class="radio"><label class = "labelGral" for="">Nombre: </label><input type="text" class = "busqParm" name = "nombre" disabled><br><br>
<input type="radio" name = "buscador" class="radio"><label class = "labelGral" for="">Código: </label><input type="number" class = "busqParm" name = "idProd" disabled><br><br>
<input type="button" value = "Buscar" id="buscar"><br><br>
<input type="button" value = "Agregar" id="agregar"><br><br>
<input type="button" value = "Eliminar" id = "eliminar"><br><br>
<input type="button" value = "Generar PDF" id = "pdf"><br><br>
<a href = "listas.php"><input type="button" value = "Volver"></a>


</div>
       
<div id="divTablaResultados">

    <table id = "tablaResultados"></table>

</div>
<div id="divTablaLista">
    
    <table id="tablaLista"></table>
    
</div>
        
    
</section>

<div class="separador"></div>

<footer id="pie">Desarrollado por Luciano Moral</footer>

</body>
</html>