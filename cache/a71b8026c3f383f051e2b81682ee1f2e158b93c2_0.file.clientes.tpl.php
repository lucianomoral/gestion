<?php /* Smarty version 3.1.24, created on 2016-07-10 21:44:16
         compiled from "C:/wamp/www/Kiosco/templates/clientes.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:204865782a59013fb11_84287201%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a71b8026c3f383f051e2b81682ee1f2e158b93c2' => 
    array (
      0 => 'C:/wamp/www/Kiosco/templates/clientes.tpl',
      1 => 1468179722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204865782a59013fb11_84287201',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5782a59017af22_88749123',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5782a59017af22_88749123')) {
function content_5782a59017af22_88749123 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '204865782a59013fb11_84287201';
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
            <td class = "menuItem"><a href="" class = "menuLink">Productos</a></td>
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