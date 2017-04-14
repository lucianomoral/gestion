<?php /* Smarty version 3.1.24, created on 2016-12-18 14:34:02
         compiled from "/var/www/html/kioscogestion/templates/precios.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:13856413845856c88a9729a1_69020573%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea948fb8728a93b2eaa91ab639d2a7665c81a7b6' => 
    array (
      0 => '/var/www/html/kioscogestion/templates/precios.tpl',
      1 => 1482076303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13856413845856c88a9729a1_69020573',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5856c88b3a4912_52305658',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5856c88b3a4912_52305658')) {
function content_5856c88b3a4912_52305658 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '13856413845856c88a9729a1_69020573';
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