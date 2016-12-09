<?php /* Smarty version 3.1.24, created on 2016-07-10 21:51:32
         compiled from "C:/wamp/www/Kiosco/templates/precios.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:326455782a744610f94_20056077%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '911931bb879712692796e93aabcfb71867a38604' => 
    array (
      0 => 'C:/wamp/www/Kiosco/templates/precios.tpl',
      1 => 1468180242,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '326455782a744610f94_20056077',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5782a74464d4d3_57831590',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5782a74464d4d3_57831590')) {
function content_5782a74464d4d3_57831590 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '326455782a744610f94_20056077';
?>
<!DOCTYPE>
<html>
<head>

    <title>Precios</title>
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
    <tr><td><a href = "consultaPrecios.php">Consultar</a></td></tr>
    <tr><td><a href = "actualizarPrecios.php">Actualizar</a></td></tr>
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