<?php /* Smarty version 3.1.24, created on 2016-12-18 21:04:21
         compiled from "/var/www/html/kioscogestion/templates/cargarProductos.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:163808421358572405b0b248_75553456%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6618c91293de4f90fadc62296ad1bcd41b746d8' => 
    array (
      0 => '/var/www/html/kioscogestion/templates/cargarProductos.tpl',
      1 => 1482076303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163808421358572405b0b248_75553456',
  'variables' => 
  array (
    'cliente' => 0,
    'lista' => 0,
    'factura' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58572405b1be60_08554342',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58572405b1be60_08554342')) {
function content_58572405b1be60_08554342 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '163808421358572405b0b248_75553456';
?>
<!DOCTYPE>
<html>
<head>

    <title>Cargar lineas de pedido</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="estilos/estilos.css">
    
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="js/cargarProductos.js"><?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
>
    
        $("document").ready(function(){
            
            var datos = $("#facturaParm").serialize();
            
            $.getJSON("AJAX.buscarFactura.php", datos, crearTablaPedido);
            
        });
    
    <?php echo '</script'; ?>
>
    
    
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

<section>
  <form action="cerrarFactura.php" method="get" name="datosProd">
       <div id="divZonaIzq">

            <label for="cliente" class="labelBloq">Cliente:</label>&nbsp;<input type="text" value = <?php echo $_smarty_tpl->tpl_vars['cliente']->value;?>
 name="cliente" class = "inputBloqueado" readonly><br><br>
            <label for="lista" class="labelBloq">Lista:</label>&nbsp;<input type="text" value = <?php echo $_smarty_tpl->tpl_vars['lista']->value;?>
 name = "lista" class = "inputBloqueado" id = "listaParm" readonly><br><br>
            <label for="factura" class="labelBloq">Factura:</label>&nbsp;<input type="text" value = <?php echo $_smarty_tpl->tpl_vars['factura']->value;?>
 name="factura" class = "inputBloqueado" id = "facturaParm" readonly><br><br>
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
</html><?php }
}
?>