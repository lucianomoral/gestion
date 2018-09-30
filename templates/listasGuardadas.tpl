<!DOCTYPE>
<html>
<head>

    <title>Listas guardadas</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="estilos/estilos.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    
    <script>

        var dataOptions = new Array();
        
        $("document").ready(function(){
            
            var i = 0;
            
            $("datalist option").each(function(){
                
                dataOptions[i] = $(this).val();
                
                i = i + 1;
                
            })
            
            $("form").submit(function(){
                
                if(!validarLista()){
                    
                    alert("Valor no valido.");
                    
                    $("#datalist").focus();
                    
                    return false;
                    
                }
                
            });
            
            $("#datalist").focus();
            
        });
    
    function validarLista(){
        
        var ok;
                
        for(var i = 0; i < dataOptions.length; i++){

            if($("#datalist").val() == dataOptions[i]){

              ok = true;

            }

        }

        if(!ok){

            $("#datalist").val("");

            ok = false;

        }
        
        return ok;
        
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
<div id="generarLista">

<form action="actualizarListas.php" method="get">
   
    <label for="descripcion" class="labelGral">Listas creadas: </label><input list = "listasGuardadas" name="idLista" id = "datalist" autocomplete = off required>
        <datalist id = 'listasGuardadas'>

            {$i = 0}
            {foreach item = LG from = $listasGuardadas}
            <option value = '{$LG.idLista}' label = '{$LG.descripcion}'></option>
            {$i = $i + 1}
            {/foreach}

        </datalist>
    <br><br>
    <input type="submit" value="Editar"><br><br>
    <a href = "listas.php"><input type="button" value="Volver"></a><br><br>
    
</form>

</div>        
    
</section>

<div class="separador"></div>

<footer id="pie">Desarrollado por Luciano Moral</footer>

</body>
</html>