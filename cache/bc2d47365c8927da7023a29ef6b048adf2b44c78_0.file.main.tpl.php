<?php /* Smarty version 3.1.24, created on 2016-12-18 12:57:19
         compiled from "/var/www/html/kioscogestion/templates/main.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:6280413115856b1df192827_61171398%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc2d47365c8927da7023a29ef6b048adf2b44c78' => 
    array (
      0 => '/var/www/html/kioscogestion/templates/main.tpl',
      1 => 1482076303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6280413115856b1df192827_61171398',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5856b1df198f09_25454588',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5856b1df198f09_25454588')) {
function content_5856b1df198f09_25454588 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '6280413115856b1df192827_61171398';
?>
<!DOCTYPE>
<html>
<head>

    <title>Página principal</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="estilos/estilos.css">
    
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="js/main.js"><?php echo '</script'; ?>
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

<section class="main"><p id="msjBienvenida"> Bienvenido! </p></section>

<div class="separador"></div>

<footer id="pie">Desarrollado por Luciano Moral</footer>

</body>
</html><?php }
}
?>