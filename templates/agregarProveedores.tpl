<!DOCTYPE>
<html>
<head>

    <title>Agregar proveedores</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="estilos/estilos.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    
    <script>
    
        $("document").ready(function(){
            
            $("#agregar").click(function(){
            
                var ok = true;
                var yesNo;
                
               if($("#proveedorAgregar").val() == ""){
                   
                   alert("Falta completar nombre.");

                   ok = false;

               }

               if($("#mailProveedorAgregar").val() == ""){
                   
                   alert("Falta completar el mail.");

                   ok = false;

               }

                if(ok)
                {
                   
                   yesNo = confirm("Desea agregar el proveedor " + $("#proveedorAgregar").val() + " ?")
                   
                   if(yesNo){

                    $.ajax({
                        url: "AJAX.agregarProveedor.php",
                        data: {
                            nombreProv: $("#proveedorAgregar").val(),
                            mailProv: $("#mailProveedorAgregar").val()
                        },
                        success: function(ok){
                            if(ok)
                            {
                                alert("Proveedor ingresado."),

                                window.location = "proveedores.php";

                            } else {

                                alert("Se produjo un error al ingresar al proveedor.")
                            }

                        },
                        error: function(){
                            alert("No se pudo agregar el proveedor")
                        }
                    });            
                       
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
            <td class = "menuItem"><a href="proveedores.php" class = "menuLink">Proveedores</a></td>
            <td class = "menuItem"><a href="listadoConsultas.php" class = "menuLink">Reportes / consultas</a></td>
        </tr>
    </table>
    
</nav>

<div class="separador"></div>

<section class="">

<div id="agregarCliente">
   
    <form action="" method="get">
        <label class="labelGral" for="proveedorAgregar">Nombre: </label><input type="text" name="proveedorAgregar" id="proveedorAgregar" autocomplete = "off" required><br><br>
        <label class="labelGral" for="mailProveedorAgregar">Mail: </label><input type="text" name="mailProveedorAgregar" id="mailProveedorAgregar" autocomplete = "off" required><br><br>
        <input type="button" value="Agregar" id="agregar"><br><br>
        <a href = "proveedores.php"><input type="button" value="Volver"></a><br><br>
    </form>
</div>
    
</section>
<div class="separador"></div>

<footer id="pie">Desarrollado por Luciano Moral</footer>

</body>
</html>