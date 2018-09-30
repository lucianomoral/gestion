<!DOCTYPE>
<html>
<head>

    <title>Listado de Consultas</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="estilos/estilos.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    
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
<div id="consultas">
<table>
    <tr id="facturaCerrada"><td><a href = "facturasCerradas.php">Facturas cerradas</a></td></tr>
    <tr><td><a href = "estadisticas.php" target="_blank">Estadisticas</a></td></tr>
    <tr><td><a href = "">Ventas por mes</a></td></tr>
    <tr><td><a href = "">Productos vendidos por mes</a></td></tr>
    <tr><td><a href = "">Margen de ganancia</a></td></tr>
    <tr><td><a href = "">Ventas por familia</a></td></tr>
    <tr><td><a href = "main.php">Volver</a></td></tr>
</table>
</div>
        
    
</section>

<div class="separador"></div>

<footer id="pie">Desarrollado por Luciano Moral</footer>

</body>
</html>