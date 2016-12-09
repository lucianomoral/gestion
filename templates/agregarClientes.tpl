<!DOCTYPE>
<html>
<head>

    <title>Agregar clientes</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="estilos/estilos.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    
    <script>
    
        $("document").ready(function(){
            
            $("#agregar").click(function(){
                
               if($("#clienteAgregar").val() == ""){
                   
                   alert("Falta completar nombre.");
                   
               } else {
                   
                   yesNo = confirm("Desea agregar el cliente " + $("#clienteAgregar").val() + " ?")
                   
                   if(yesNo){
                       
                    form = document.forms[0];
                       
                    form.action = "maestroClientes.php";
                   
                    document.forms[0].submit();             
                       
                   }
                   
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
            <td class = "menuItem"><a href="listadoConsultas.php" class = "menuLink">Reportes / consultas</a></td>
        </tr>
    </table>
    
</nav>

<div class="separador"></div>

<section class="">

<div id="agregarCliente">
   
    <form action="" method="get">
        <label class="labelGral" for="clienteAgregar">Nombre: </label><input type="text" name="clienteAgregar" id="clienteAgregar" autocomplete = "off" required><br><br>
        <input type="button" value="Agregar" id="agregar"><br><br>
        <a href = "clientes.php"><input type="button" value="Volver"></a><br><br>
    </form>
</div>
    
</section>
<div class="separador"></div>

<footer id="pie">Desarrollado por Luciano Moral</footer>

</body>
</html>