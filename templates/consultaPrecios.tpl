<!DOCTYPE>
<html>
<head>

    <title>Consulta de precios</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="estilos/estilos.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    
    <script src="js/consultaPrecios.js"></script>
    
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

       <form action="" method="get" id="formConsultaPrecios">
           
           <div id = "divBuscaPrecios" download = "prueba.xls">
               <label class = "labelGral" for="margen">Margen: </label><input type="number" name = "margen" id = "margen" autocomplete="off"><br><br>
               <input type = 'radio' class = 'check' name = "habilitar"><label class = "labelGral" for="idProd">Código: </label><input type="number" name = "idProd" id="idProd" disabled autocomplete="off"><br><br>
               <input type = 'radio' class = 'check' name = "habilitar"><label class = "labelGral" for="nombre">Nombre: </label><input type="text" name = "nombre" id = "nombre" disabled autocomplete="off"><br><br>
               <input type="button" value="Buscar" id="buscar"><br><br>
               <input type="button" value="Limpiar" id="limpiar"><br><br>
               <a href = "precios.php"><input type="button" value="Volver" ></a><br><br>
           </div>
           
           <table id="tablaConsultaPrecios">
               
               
               
           </table>
        
       </form>
        
    
</section>

<div class="separador"></div>

<footer id="pie">Desarrollado por Luciano Moral</footer>

</body>
</html>