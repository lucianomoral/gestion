<?php /* Smarty version 3.1.24, created on 2016-07-10 21:44:29
         compiled from "C:/wamp/www/Kiosco/templates/datosListas.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:92455782a59d0d3369_79881576%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22ca34be603f26e810ecc16c87541bd2d684e95c' => 
    array (
      0 => 'C:/wamp/www/Kiosco/templates/datosListas.tpl',
      1 => 1468179751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92455782a59d0d3369_79881576',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5782a59d1126a8_26260072',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5782a59d1126a8_26260072')) {
function content_5782a59d1126a8_26260072 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '92455782a59d0d3369_79881576';
?>
<!DOCTYPE>
<html>
<head>

    <title>Generar listas</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="estilos/estilos.css">
    
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"><?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
>
    
        $("document").ready(function(){
        
            $("form").submit(function(){

                if($("#listaDesc").val() == ""){

                    alert("Completar descripción.");

                    return false;

                }

            });
        
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
            <td class = "menuItem"><a href="" class = "menuLink">Productos</a></td>
            <td class = "menuItem"><a href="clientes.php" class = "menuLink">Clientes</a></td>
            <td class = "menuItem"><a href="listadoConsultas.php" class = "menuLink">Reportes / consultas</a></td>
        </tr>
    </table>
    
</nav>

<div class="separador"></div>

<section class="query">
<div id="generarLista">

<form action="generarListas.php" method="get">
   
    <label for="descripcion" class="labelGral">Descripcion: </label><input type="text" name="listaDesc" id="listaDesc" autocomplete = "off"><br><br>
    <input type="submit" value="Agregar"><br><br>
    <a href = "listas.php"><input type="button" value="Volver"></a><br><br>
    
</form>

</div>        
    
</section>

<div class="separador"></div>

<footer id="pie">Desarrollado por Luciano Moral</footer>

</body>
</html><?php }
}
?>