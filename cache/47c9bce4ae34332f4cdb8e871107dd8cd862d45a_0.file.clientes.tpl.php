<?php /* Smarty version 3.1.24, created on 2016-12-18 14:22:54
         compiled from "/var/www/html/kioscogestion/templates/clientes.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:7725577685856c5ee27bbe5_25641258%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47c9bce4ae34332f4cdb8e871107dd8cd862d45a' => 
    array (
      0 => '/var/www/html/kioscogestion/templates/clientes.tpl',
      1 => 1482076303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7725577685856c5ee27bbe5_25641258',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5856c5eee594c4_70701490',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5856c5eee594c4_70701490')) {
function content_5856c5eee594c4_70701490 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '7725577685856c5ee27bbe5_25641258';
?>
<!DOCTYPE>
<html>
<head>

    <title>Clientes</title>
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
    <tr><td><a href = "agregarClientes.php">Agregar</a></td></tr>
    <tr><td><a href = "eliminarClientes.php">Eliminar</a></td></tr>
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