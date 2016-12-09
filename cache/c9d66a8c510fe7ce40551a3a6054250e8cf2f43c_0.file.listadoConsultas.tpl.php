<?php /* Smarty version 3.1.24, created on 2016-08-20 14:35:17
         compiled from "C:/wamp/www/Kiosco/templates/listadoConsultas.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2921457b84e855eedd2_89340935%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9d66a8c510fe7ce40551a3a6054250e8cf2f43c' => 
    array (
      0 => 'C:/wamp/www/Kiosco/templates/listadoConsultas.tpl',
      1 => 1468180181,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2921457b84e855eedd2_89340935',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_57b84e85d084c6_20298113',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57b84e85d084c6_20298113')) {
function content_57b84e85d084c6_20298113 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2921457b84e855eedd2_89340935';
?>
<!DOCTYPE>
<html>
<head>

    <title>Listado de Consultas</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="estilos/estilos.css">
    
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"><?php echo '</script'; ?>
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
</html><?php }
}
?>