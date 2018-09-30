<!DOCTYPE>
<html>
<head>

    <title>Generar pedido</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="estilos/estilos.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <script src="js/main.js"></script>
    
    
</head>
<body>

<header><h1 class = "encabezado">Gestión Kiosco</h1></header>

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
    
    <form action="cargarProductos.php" method="get">
        <div id="clienteLista">
          
           <label for="cliente" class="labelGral">Cliente: </label>
               <div id="divCliente" class="organizador">
                   <select name="cliente" id="cliente">
                   {$i = 0}
                    {section name="clientes" loop=$clientes}
                        <option class = "option" value = {$ids[$i]}>{$clientes[clientes]}</option>
                        {$i = $i + 1}
                    {/section}
                   </select> 
                </div>
                
               <br><br>

            <label for = "lista" class="labelGral">Lista: </label>
               <div id="divLista" class="organizador">
                   <select name="lista" id="lista">

                       <option class = "option">Lista6</option>
                       <option class = "option">Lista10</option>

                   </select>
                </div>

                <br><br>
                
            <label for="descripcion" class="labelGral">Descripcion: </label><input type="text" name = "descripcion" id="descripcion" disabled><br><br>
            
            <div id="facturasAbiertas"></div>
            <div id = "divBotones"><input type="button" value="Confirmar" name="confirmar" id="confirmar"></div><br>
            
            <a href = "main.php"><input type="button" value="Volver"></a>    
                        
        </div>
        
    </form>
   
</section>

<div class="separador"></div>

<footer id="pie">Desarrollado por Luciano Moral</footer>

</body>
</html>