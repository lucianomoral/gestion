<?php /* Smarty version 3.1.24, created on 2016-12-18 21:03:33
         compiled from "/var/www/html/kioscogestion/templates/actualizarPrecios.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1074678262585723d542e610_14126080%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '026c7a93c7a5cc46bcec2952fca01e4b92718aca' => 
    array (
      0 => '/var/www/html/kioscogestion/templates/actualizarPrecios.tpl',
      1 => 1482076303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1074678262585723d542e610_14126080',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_585723d543b256_79066123',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_585723d543b256_79066123')) {
function content_585723d543b256_79066123 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1074678262585723d542e610_14126080';
?>
<!DOCTYPE>
<html>
<head>

    <title>Actualizar precios</title>
    <meta charset="utf-8">
   
    <link rel="stylesheet" href="estilos/estilos.css">    
    
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"><?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
 src="js/actualizarPrecios.js"><?php echo '</script'; ?>
>
    
    <style>
    
        .table-hover tbody tr:hover td{
            
            background-color: darkgrey;
            cursor: pointer;
            
        }
    
    </style>
    
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
<div id="precios">
    
    <div id="parmBusqProd">

    <label for="codProd" class="labelGral">Código de producto</label>&nbsp;<input name = "codProd" type="number" id="codiProd"><br><br>
    <label for="nombreProd" class="labelGral">Nombre de producto</label>&nbsp;<input name = "nombreProd" type="text" id="nombreProd">
    
    </div>
    
    <table class="table table-hover" id="tableUltimosPrecios">
        <tr class = 'cabecera' name="0">
            <td>Cód.</td>
            <td>Nombre</td>
            <td>Costo</td>
            <td>Lista6</td>
            <td>Lista10</td>
            <td>Fecha</td>
        </tr>
    </table>
    
    <div id="divActualizaPrecios" class="modal">
        <div class="modalConteiner">
            <span class="cerrar">x</span>
            <table id="tableActualizaPrecios">
                <tr>
                    <td><label for="idProd">Código</label>&nbsp;</td><td><input type="text" id="idProd" readonly name="idProd"></td>
                </tr>
                <tr>
                    <td><label for="nombreArt">Nombre</label>&nbsp;</td><td><input type="text" id="nombreArt" readonly name="nombreArt"></td>
                </tr>
                <tr>
                    <td><label for="costoArt">Costo</label>&nbsp;</td><td><input type="number" id="costoArt" name="costoArt"></td>
                </tr>
                <tr>
                    <td><label for="lista6Art">Lista6</label></td>&nbsp;<td><input type="number" id="lista6Art" name="lista6Art"></td>
                </tr>
                <tr>
                    <td><label for="lista10Art">Lista10</label></td>&nbsp;<td><input type="number" id="lista10Art" name="lista10Art"></td>        
                </tr>
                <tr>
                    <td><label for="fecha">Fecha</label></td>&nbsp;<td><input type="text" readonly id="fecha" for="fecha" name="fecha"></td>
                </tr>
                <tr>
                    <td colspan="2"><button id="guardar">Guardar</button></td>
                </tr>
            </table>
        </div>
    </div>
                
</div>
   

    
</section>

<div class="separador"></div>

<footer id="pie">Desarrollado por Luciano Moral</footer>

</body>
</html><?php }
}
?>