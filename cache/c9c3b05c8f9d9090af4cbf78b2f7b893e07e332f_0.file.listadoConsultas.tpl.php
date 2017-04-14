<?php /* Smarty version 3.1.24, created on 2016-12-18 19:53:15
         compiled from "/var/www/html/kioscogestion/templates/listadoConsultas.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:7727998095857135b75bfe5_49380639%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9c3b05c8f9d9090af4cbf78b2f7b893e07e332f' => 
    array (
      0 => '/var/www/html/kioscogestion/templates/listadoConsultas.tpl',
      1 => 1482076303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7727998095857135b75bfe5_49380639',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5857135b765536_40454635',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5857135b765536_40454635')) {
function content_5857135b765536_40454635 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '7727998095857135b75bfe5_49380639';
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